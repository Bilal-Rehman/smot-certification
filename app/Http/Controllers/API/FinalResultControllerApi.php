<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FinalResult;
use Illuminate\Http\Request;

class FinalResultControllerApi extends Controller
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
    public function show(FinalResult $finalResult)
    {
        $machineResults = $finalResult->machineResults;
        $machineResultsWithScores = [];
        foreach ($machineResults as $machineResult) {
            $machineResult['scores'] = $machineResult->scores;

            $machineResultsWithScores = $machineResults;
        }
        $response = [
            "success" => true,
            'result_id' => $finalResult->id,
            'machine_results' => $machineResultsWithScores,
        ];
        return response()->json($response, 200);
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
