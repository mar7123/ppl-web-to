<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;
use Xendit\Configuration;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\CustomerObject;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\InvoiceItem;
use Xendit\XenditSdkException;

use function Laravel\Prompts\error;

class PaymentController extends Controller
{
    public function __construct()
    {
        Configuration::setXenditKey(env('XENDIT_API_KEY'));
    }
    public function create(Request $request)
    {
        $user = $request->user();
        $pay_email = $request->payer_email;
        if (!$pay_email) {
            $pay_email = $user->email;
        }
        $gi_name = explode(' ', $user->full_name);
        $cust = new CustomerObject([
            "given_names" => $gi_name[0],
            "mobile_number" => $user->phone_num,
            "email" => $user->email,
            "customer_id" => $user->user_id
        ]);
        $item = new InvoiceItem([
            "name" => "TryoutX Subscription",
            "price" => 35000,
            "quantity" => 1,
        ]);
        $create_invoice_request = new CreateInvoiceRequest([
            'external_id' => (string) Str::uuid(),
            'payer_email' => $pay_email,
            'description' => "Member TryoutX",
            'amount' => 35000,
            'currency' => 'IDR',
            "customer" => $cust,
            "items" => [$item],
            'success_redirect_url' => 'https://tryoutx.com/thankyou',
            'failure_redirect_url' => 'https://tryoutx.com/payment-failed',
        ]);
        $apiInstance = new InvoiceApi();
        try {
            $result = $apiInstance->createInvoice($create_invoice_request);
        } catch (XenditSdkException $e) {
            // echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            // echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
            return Response([
                'status' => false,
                'data' => $e->getFullError(),
            ], 500);
        }

        // Save to database
        $py = Payment::create([
            'checkout_link' => $result->getInvoiceUrl(),
            'external_id' => $result->getExternalId(),
            'status' => $result->getStatus(),
        ]);
        return Response([
            'status' => true,
            'data' => $result->getInvoiceUrl(),
        ], 201);
    }

    public function webhook(Request $request)
    {
        try {
            $apiInstance = new InvoiceApi();
            try {
                $result = $apiInstance->getInvoiceById($request->id);
            } catch (\Xendit\XenditSdkException $e) {
                // echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
                // echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
                return Response([
                    'status' => false,
                    'data' => $e->getMessage(),
                ], 500);
            }

            // Get data
            $payment = Payment::where('external_id', $request->external_id)->firstOrFail();

            if ($payment->status == 'settled') {
                return Response([
                    'status' => true,
                    'data' => "Payment has been already processed",
                ], 200);
            }
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $cust = $result->getCustomer();
            $user = User::where('user_id', $cust->getCustomerId())->first();
            $user->update(['subscribed_at' => $timenow]);
            // Update status payment
            $payment->status = $result->getStatus();
            $payment->save();

            return Response([
                'status' => true,
                'data' => "Success",
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                // 'message' => $th->getMessage()
            ], 500);
        }
    }
}
