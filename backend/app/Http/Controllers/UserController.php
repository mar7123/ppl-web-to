<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Throwable;

class UserController extends Controller
{
    public function createUser(Request $request): Response
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'username' => 'required',
                'full_name' => 'required',
                'password' => 'required',
                'email' => 'required|email|unique:users,email',
                'birth_date' => 'required|date',
                'phone_num' => 'required|starts_with:+',
                'prov' => 'required',
                'city' => 'required',
                'school' => 'required',
                'major' => 'required|in:Saintek,Soshum',
                'grad_date' => 'required',
            ]);
            if ($validateUser->fails()) {
                return Response([
                    'status' => false,
                    'message' => 'validation_error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $user = User::create([
                'username' => $request->username,
                'full_name' => $request->full_name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'phone_num' => $request->phone_num,
                'prov' => $request->prov,
                'city' => $request->city,
                'school' => $request->school,
                'major' => $request->major,
                'grad_date' => $request->grad_date,
            ]);
            return Response([
                'status' => true,
                'message' => 'User created successfully',
            ], 201);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function loginUser(Request $request): Response
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validateUser->fails()) {

                return Response([
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            if (Auth::attempt($request->all())) {
                $request->session()->regenerate();
                $user = User::where('email', $request->email)->first();
                $success =  $user->createToken('API Token')->plainTextToken;
                return Response([
                    'status' => true,
                    'message' => 'User logged in successfully',
                    'token' => $success
                ], 200);
            }
            return Response([
                'status' => false,
                'message' => 'email or password wrong'
            ], 401);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function updateUser(Request $request): Response
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'username' => 'required',
                'full_name' => 'required',
                'email' => 'required|email|unique:users,email',
                'birth_date' => 'required|date',
                'phone_num' => 'required|starts_with:+',
                'prov' => 'required',
                'city' => 'required',
                'school' => 'required',
                'major' => 'required|in:Saintek,Soshum',
                'grad_date' => 'required',
            ]);
            if ($validateUser->fails()) {
                return Response([
                    'status' => false,
                    'message' => 'validation_error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $user = $request->user();
            $user->update($request->all());
            return Response([
                'status' => true,
                'message' => 'profile updated'
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function logout(Request $request): Response
    {
        try {
            $request->user()->tokens()->delete();
            return Response(['data' => 'User Logout successfully.'], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
