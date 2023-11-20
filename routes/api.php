<?php

use App\Http\Controllers\API\ApplicantApiController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FinalResultControllerApi;
use App\Http\Controllers\API\MachineTypeControllerApi;
use App\Http\Controllers\API\QuestionControllerApi;
use App\Http\Controllers\API\TestTypeControllerApi;
// use App\Http\Controllers\Auth\LoginController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('applicants', ApplicantApiController::class);

    Route::resource('machineTypes', MachineTypeControllerApi::class);

    Route::resource('finalResults', FinalResultControllerApi::class);

    Route::resource('testTypes', TestTypeControllerApi::class);

    Route::resource('questions', QuestionControllerApi::class);
});

// Route::post('/login', [AuthController::class, 'login']);
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register')->middleware('auth:sanctum');
});



// Route::controller(ApplicantApiController::class)->group(function () {
//     Route::get('applicants/{applicant}', 'show');
// });

// Route::controller(MachineTypeControllerApi::class)->group(function () {
//     Route::get('machinesTypes/{machineType}', 'show');
// });


// Route::controller(FinalResultControllerApi::class)->group(function () {
//     Route::get('finalResults/{finalResult}', 'show');
// });

// Route::controller(TestTypeControllerApi::class)->group(function () {
//     Route::get('testTypes/{testType}', 'show');
// });


// Route::controller(QuestionControllerApi::class)->group(function () {
//     Route::get('questions/{question}', 'show');
// });
