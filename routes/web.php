<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('UserResponse', function(){
    return view('UserResponse');
});

Route::get('applicantDetails', function(){
    return view('applicantDetails');
});

Route::get('/UserResponse', 'App\Http\Controllers\UserResponseController@ViewUserResponse');
Route::get('/applicantDetails', 'App\Http\Controllers\ApplicantController@ViewApplicant');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
