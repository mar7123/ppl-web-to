<?php

namespace App\Http\Controllers;

use App\Models\TryoutPKG;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
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
                // 'prov' => 'required',
                // 'city' => 'required',
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
            $salt = Str::random(10);
            $user = User::create([
                'username' => $request->username,
                'full_name' => $request->full_name,
                'salt' => $salt,
                'password' => Hash::make($request->password . $salt),
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'phone_num' => $request->phone_num,
                // 'prov' => $request->prov,
                // 'city' => $request->city,
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
            $saltres = User::select('salt')->where('email', $request->email)->first();
            if ($saltres == null) {
                return Response([
                    'status' => false,
                    'message' => 'account not found'
                ], 401);
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password . $saltres->salt])) {
                $user = User::where('email', $request->email)->first();
                // if ($user->tokens->where('name', 'Login Token')->first() != null) {
                //     $time = new DateTime();
                //     $timenow = $time->format('Y-m-d H:i:s');
                //     if ($user->tokens->where('name', 'Login Token')->first()->expires_at <= $timenow) {
                //         return Response([
                //             'status' => true,
                //             'message' => 'User already logged in',
                //         ], 200);
                //     }
                // }

                // attach TO
                $attach_to = TryoutPKG::whereDoesntHave('users', function (Builder $query) use ($request) {
                    $query->where('users.user_id', $request->user()->user_id);
                })->pluck('tryout_id');
                if (!empty($attach_to)) {
                    $user->tryouts()->attach($attach_to, ['shuffle_seed' => fake()->numberBetween(1, 100)]);
                }

                $request->session()->regenerate();
                $expiry = new DateTime();
                $expiry->modify('+30 minutes');
                $success =  $user->createToken('Login Token', ['*'], $expiry)->plainTextToken;
                $tkn = explode("|", $success);
                return Response([
                    'status' => true,
                    'message' => 'User logged in successfully',
                    'token' => $tkn[1],
                    'userData' => $user->setVisible(['email', 'subscribed_at'])
                ], 201);
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
