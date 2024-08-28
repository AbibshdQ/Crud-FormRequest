<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', EmployeeController::class);

Route::resource('/employee', EmployeeController::class);

Route::resource('/employee-backend', EmployeeController::class);
