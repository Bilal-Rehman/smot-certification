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
                ], 400);
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                $success['token'] = $user->createToken('laragigs')->plainTextToken;
                $success['userData'] = [
                    'name' => $user->name,
                    'email' => $user->email,
                ];
                // $success['name'] = $user->name;
                // $success['email'] = $user->email;

                $response = [
                    'success' => true,
                    'data' => $success,
                    'message' => 'User logged in successfully',
                ];

                return response()->json($response, 200);
            } else {
                $errors = [
                    'message' => 'Invalid email or password',
                ];

                if (Auth::attempt(['email' => $request->email])) {
                    $errors['message'] = 'Incorrect password';
                } else {
                    $errors['message'] = 'Invalid email';
                }

                return response()->json([
                    'success' => false,
                    'message' => $errors,
                ], 403);
            }
        } catch (Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Incorrect password", //"Unknown error occured. Couldn't login. " . $th,
            ], 400);
        }
    }

    public function register(Request $request)
    {
        // In case anything unexpected happens we are using try/catch
        try {
            // Validate all personal information fields
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

            // If validation fails return a bad input response
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'bad input',
                    'error' => $validator->errors()
                ], 400);
            }

            // Save all the fields in $input variable
            $input = $request->all();

            // removing fields which are separate from applicant model
            unset($input['academic_qualification']);
            unset($input['employment_record']);

            // creating the applicant model
            $applicant = Applicant::create($input);

            // Adding necessary fields to $data to return in response
            // $data['id'] = $applicant->id;
            // $data['name'] = $applicant->applicant_name;
            $data['personalInformation'] = $input;

            // in case academic qualifications were sent
            if (isset($request->all()['academic_qualification'])) {
                $academicQualification = $request->all()['academic_qualification'];
                $applicant->academicQualifications()->create($academicQualification);
                $data['Academic Qualification'] = $academicQualification;
            }
            // in case employment record were sent
            if (isset($request->all()['employment_record'])) {
                $employmentRecord = $request->all()['employment_record'];
                $applicant->employmentRecords()->create($employmentRecord);
                $data['Employment Record'] = $employmentRecord;
            }

            // making valid response to return
            $response = [
                'success' => true,
                'data' => $data,
                'message' => 'User registered succesfully',
            ];

            // returing the response with status code
            return response()->json($response, 200);
        } catch (Throwable $th) {
            // If something unexpected happens 
            return response()->json([
                'success' => false,
                'message' => 'Unknown error ' . $th
            ], 400);
        }
    }
}
