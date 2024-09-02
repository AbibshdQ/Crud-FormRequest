<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/addEmployee', function () {
    return view('layouts.form');
});

Route::resource('/', EmployeeController::class);

Route::resource('/employee', EmployeeController::class);

Route::resource('/employee-backend', EmployeeController::class);
