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
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function() {
    Route::get('/dashboard', [App\Http\Controllers\admin\AdminDashboardController::class, 'index']);
    Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('users.index');
    Route::post('/users', [App\Http\Controllers\admin\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [App\Http\Controllers\admin\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\admin\UserController::class, 'update'])->name('users.update');
    Route::post('/users/{id}', [App\Http\Controllers\admin\UserController::class, 'destroy'])->name('users.destroy');
    Route::resource('skills', App\Http\Controllers\admin\SkillController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\UiController::class, 'index'])->name('home');




