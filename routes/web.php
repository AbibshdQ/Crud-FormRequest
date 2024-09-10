<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectEmployeeController;
use Illuminate\Support\Facades\Route;

 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

 
Route::middleware(['nama'])->group(function () {
  
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/home', function() {
        return view('home');
    });

    Route::resource('/employee', EmployeeController::class);
    Route::resource('/office', OfficeController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/project-employee', ProjectEmployeeController::class);

    Route::resource('/project-backend', ProjectController::class);
    Route::resource('/employee-backend', EmployeeController::class);
    Route::resource('/office-backend', OfficeController::class);
});

