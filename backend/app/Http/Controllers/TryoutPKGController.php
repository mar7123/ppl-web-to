<?php

namespace App\Http\Controllers;

use App\Models\TryoutPKG;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class TryoutPKGController extends Controller
{
    public function getTryouts(): Response
    {
        try {
            $result = TryoutPKG::take(10)->get();
            return Response([
                'status' => true,
                'data' => $result,
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
