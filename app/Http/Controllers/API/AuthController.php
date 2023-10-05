<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Throwable;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation error',
                    'error' => $validator->errors(),
                ], 401);
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                $success['token'] = $user->createToken('laragigs')->plainTextToken;
                $success['name'] = $user->name;

                $response = [
                    'success' => true,
                    'data' => $success,
                    'message' => 'User logged in successfully',
                ];

                return response()->json($response, 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized',
                ], 403);
            }
        } catch (Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Unknown error occured. Couldn't login",
            ], 400);
        }
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|confirmed|min:8',
                ]
            );
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'bad input',
                    'error' => $validator->errors()
                ], 400);
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            unset($input['password_confirmation']);
            $user = User::create($input);

            $data['token'] = $user->createToken('smot-certification')->plainTextToken;
            $data['name'] = $user->name;

            $response = [
                'success' => true,
                'data' => $data,
                'message' => 'User registered succesfully',
            ];

            return response()->json($response, 200);
        } catch (Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unknown error ' . $th
            ], 400);
        }
    }
}
