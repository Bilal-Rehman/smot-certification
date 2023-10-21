<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Response;
class UserResponseController extends Controller
{
    function ViewUserResponse(Request $request){
        $allUserResponse = User_Response::all();
        $response = ['allUserResponse' => $allUserResponse];
        return view('UserResponse', $response);
    }
}
