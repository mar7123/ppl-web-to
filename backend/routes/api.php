<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TryoutPKGController;
use App\Http\Controllers\UserPKGController;
use App\Http\Middleware\EnsureSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        $expiry = new DateTime();
        $expiry->modify('+1 hour');
        $request->user()->tokens()->update(['expires_at' => $expiry]);
        return $request->user();
    });
    Route::get('/logout', [UserController::class, 'logout']);

    // payment
    Route::post('/payments', [PaymentController::class, 'create']);

    // parse soal
    Route::get('/parseSoal', [TryoutPKGController::class, 'parseSoal']);
});
Route::middleware(['auth:sanctum', EnsureSubscription::class])->group(function () {
    Route::post('/user/update', [UserController::class, 'updateUser']);
    // dashboard
    Route::get('/user/tryout', [UserPKGController::class, 'getUserTryouts']);
    Route::get('/user/tryout/history', [UserPKGController::class, 'getUserTryoutHistories']);
    Route::get('/user/tryout/upcoming', [UserPKGController::class, 'getUserTryoutUpcoming']);
    Route::get('/user/tryout/notpurchased', [UserPKGController::class, 'getUserTryoutNotPurchased']);
    Route::post('/user/tryout/assign', [TryoutPKGController::class, 'assignTryout']);

    // start tryout
    Route::post('/user/tryout/start', [UserPKGController::class, 'startUserTryout']);
    Route::post('/user/tryout/next', [UserPKGController::class, 'nextUserTryout']);
    Route::post('/user/tryout/check', [UserPKGController::class, 'checkUserTryout']);
    Route::post('/user/tryout/end', [UserPKGController::class, 'endUserTryout']);
    Route::post('/user/tryout/questions', [UserPKGController::class, 'getUserTryoutQuestions']);
    Route::post('/user/tryout/answer', [UserPKGController::class, 'answerUserTryout']);

    // tryout review
    Route::post('/user/tryout/sub', [TryoutPKGController::class, 'getTryoutSub']);
});
// tryout util
Route::post('/tryout/eval', [TryoutPKGController::class, 'evalTryout']);

Route::post('/forgotpass', [UserController::class, 'forgotPass'])->name('password.email');
Route::post('/resetpass', [UserController::class, 'resetPass'])->name('password.update');

// articles
Route::get('/articles', [ArticleController::class, 'getArticles']);
Route::get('/articles/{id}', [ArticleController::class, 'getArticleById']);

Route::post('/payments/webhook/xendit', [PaymentController::class, 'webhook']);
Route::post('auth/register', [UserController::class, 'createUser']);
Route::post('auth/login', [UserController::class, 'loginUser']);
