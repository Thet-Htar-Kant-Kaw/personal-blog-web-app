<?php

use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// UI 
Route::get('/', [App\Http\Controllers\UiController::class, 'index']);

// Admin
Route::get('/admin', [App\Http\Controllers\admin\AdminDashboardController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
