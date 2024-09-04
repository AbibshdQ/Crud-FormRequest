<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/addEmployee', function () {
    return view('layouts.form');
});

Route::resource('/', EmployeeController::class);

Route::resource('/employee', EmployeeController::class);

Route::resource('/office', OfficeController::class);

Route::resource('/employee-backend', EmployeeController::class);

Route::resource('/office-backend', OfficeController::class);
