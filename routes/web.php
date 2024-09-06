<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectEmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/addEmployee', function () {
//     return view('layouts.form');
// });

Route::resource('/', EmployeeController::class);

Route::resource('/employee', EmployeeController::class);

Route::resource('/office', OfficeController::class);

Route::resource('/project', ProjectController::class);

Route::resource('/project-employee', ProjectEmployeeController::class);

// Route::resource('/project-employee-backend', ProjectEmployeeController::class);

Route::resource('/project-backend', ProjectController::class);

Route::resource('/employee-backend', EmployeeController::class);

Route::resource('/office-backend', OfficeController::class);
