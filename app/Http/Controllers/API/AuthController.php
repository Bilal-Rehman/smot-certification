<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Throwable;

class UserRole
{
    const male = 'male';
    const female = 'female';
    const other = 'other';
}


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
                $applicant = Auth::Applicant();

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
                    'applicant_name' => 'required',
                    'father_name' => 'required',
                    'date_of_birth' => 'required|date_format:Y-m-d|before:today',
                    'cnic' => 'required|min:15|max:15|unique:applicants',
                    'domicile' => 'required',
                    'gender' => 'required|in:male,female,other',
                    'cell_no' => 'required|min:11|max:11',
                    'residential_address' => 'required',
                    'permanent_address' => 'required',
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
            $applicant = Applicant::create($input);

            $data['id'] = $applicant->id;
            $data['name'] = $applicant->applicant_name;

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
