<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Applicant $applicant)
    {
        // dd($applicant->applicant_name);
        $responose['personalInformation'] =
            [
                'id' => $applicant->id,
                'applicantName' => $applicant->applicant_name,
                'father_name' => $applicant->father_name,
                'date_of_birth' => $applicant->date_of_birth,
                'cnic' => $applicant->cnic,
                'domicile' => $applicant->domicile,
                'gender' => $applicant->gender,
                'cell_no' => $applicant->cell_no,
                'residential_address' => $applicant->residential_address,
                'permanent_address' => $applicant->permanent_address,
            ];

        if ($applicant->academicQualifications()->exists()) {
            $responose['academicQualifications'] = $applicant->academicQualifications;
        }

        if ($applicant->employmentRecords()->exists()) {
            $responose['employmentRecords'] = $applicant->employmentRecords;
        }
        return response()->json($responose);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
