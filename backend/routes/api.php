<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TryoutPKGController;
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
        return $request->user();
    });
    Route::get('/user/update', [UserController::class, 'updateUser']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/tryout', [TryoutPKGController::class, 'getTryouts']);
});
// Route::middleware('auth:sanctum')->post('/auth/register', [UserController::class, 'createUser']);
Route::post('auth/register', [UserController::class, 'createUser']);
Route::post('auth/login', [UserController::class, 'loginUser']);
