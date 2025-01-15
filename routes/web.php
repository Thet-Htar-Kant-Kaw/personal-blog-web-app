<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

// Route::get('/', function () {
//     return view('welcome');
// });

// UI 
Route::get('/', [App\Http\Controllers\UiController::class, 'index']);

// Admin
Route::get('/admin', [App\Http\Controllers\admin\AdminDashboardController::class, 'index']);

Route::get('/home', [App\Http\Controllers\UiController::class, 'index'])->name('home');

Auth::routes();


