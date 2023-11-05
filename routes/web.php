<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\FinalResultController;
use App\Http\Controllers\FlatlockController;
use App\Http\Controllers\LockStitchController;
use App\Http\Controllers\OverlockController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/applicants/create', [ApplicantController::class, 'create'])->middleware('auth');
Route::post('/home/applicants/store', [ApplicantController::class, 'store'])->middleware('auth');
Route::get('/home/lock-stitch/create', [LockStitchController::class, 'create'])->middleware('auth');
Route::post('/home/lock-stitch/store', [LockStitchController::class, 'store'])->middleware('auth');
Route::get('/home/overlock/create', [OverlockController::class, 'create'])->middleware('auth');
Route::post('/home/overlock/store', [OverlockController::class, 'store'])->middleware('auth');
Route::get('/home/flatlock/create', [FlatlockController::class, 'create'])->middleware('auth');
Route::post('/home/flatlock/store', [FlatlockController::class, 'store'])->middleware('auth');
Route::get('/home/applicants/final-result', [FinalResultController::class, 'create'])->middleware('auth');
