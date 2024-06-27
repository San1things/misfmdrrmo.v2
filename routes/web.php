<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('users');
// });

Route::get('/', [UsersController::class, 'index'])->name('homepage');

Route::post('/updateuser', [UsersController::class, 'userUpdate'])->name('userupdate');
