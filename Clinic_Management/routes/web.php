<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClinicController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clinics', [ClinicController::class,'index'])->name('clinics.index');
Route::get('/clinic/create', [ClinicController::class,'create'])->name('clinic.create');
Route::get('/clinic/{id}', [ClinicController::class,'show'])->name('clinic.show');
Route::post('/clinic', [ClinicController::class ,'store'])->name('clinic.store');
Route::get('/clinic/{id}/edit', [ClinicController::class ,'edit'])->name('clinic.edit');
Route::put('/clinic/{id}', [ClinicController::class ,'update'])->name('clinic.update');

Route::get('/branches', [BranchController::class,'index'])->name('branches.index');
Route::get('/branch/create/{id}', [BranchController::class ,'create'])->name('branch.create');
Route::post('/branch', [BranchController::class ,'store'])->name('branch.store');
Route::get('/branch/{id}/edit', [BranchController::class ,'edit'])->name('branch.edit');
Route::put('/branch/{id}', [BranchController::class ,'update'])->name('branch.update');

