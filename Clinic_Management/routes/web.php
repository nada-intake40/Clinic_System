<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/clinics', 'ClinicController@index')->name('clinics.index');
Route::get('/clinic/{id}', 'ClinicContoller@show')->name('clinic.show');
Route::get('/clinic/create', 'ClinicContoller@create')->name('clinic.create');
Route::post('/clinic', 'ClinicContoller@store')->name('clinic.store');
Route::put('/clinic/{id}/edit', 'ClinicContoller@edit');
Route::post('/clinic/{id}', 'ClinicContoller@update')->name('clinic.update');

Route::get('/branches', 'BranchController@index')->name('Branches.index');
Route::get('/branch/create/{id}', 'BranchContoller@create')->name('branch.create');
Route::post('/branch', 'BranchContolller@store')->name('branch.store');
Route::put('/branch/{id}/edit', 'BranchContoller@edit')->name('branch.edit');
Route::post('/branch/{id}', 'BranchContolller@update')->name('branch.update');

