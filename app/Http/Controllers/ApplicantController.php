<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    function ViewAllApplicant(Request $request){
        $allApplicant = Applicant::all();
        $applicant = ['allApplicant' => $allApplicant];
        return view('applicantDetails', $applicant);
    }

    function ViewApplicant(Request $request){
        $applicantId = $request->id;
        $applicant = Applicant::find($applicantId);
        return view('applicantDetails', compact('applicant'));
    }
}
