<?php

use App\Http\Controllers\Pegawaicontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', Pegawaicontroller::class);

Route::resource('/pegawai', Pegawaicontroller::class);

Route::resource('/pegawai-backend', Pegawaicontroller::class);
