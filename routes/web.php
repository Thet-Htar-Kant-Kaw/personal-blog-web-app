<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\admin\{ PostController, UserController, SkillController, ProjectController, CategoryController, StudentCountController, AdminDashboardController };

// Route::get('/', function () {
//     return view('welcome');
// });

// UI 
Route::get('/', [UiController::class, 'index']);
Route::get('/posts', [UiController::class, 'postsIndex'])->name('posts.index');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/like/{postId}', [UiController::class, 'like']);
    Route::post('/dislike/{postId}', [UiController::class, 'dislike']);
    
    Route::post('/comment/{postId}', [CommentController::class, 'comment']);
    Route::get('/comments/{postId}', [CommentController::class, 'show']);

    Route::get('/posts/{id}/details', [UiController::class, 'postDetailsIndex'])->name('postDetails.index');
    Route::post('/posts', [UiController::class, 'search'])->name('search-posts');
    Route::get('/search-posts-by-category/{categoryId}', [UiController::class, 'searchByCategory']);
});

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function() {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::resource('skills', SkillController::class);
    Route::resource('projects', ProjectController::class);
    Route::get('student-count', [StudentCountController::class, 'index'])->name('student-count.index');
    Route::post('student-count', [StudentCountController::class, 'store'])->name('student-count.store');
    Route::put('student-count/{id}/update', [StudentCountController::class, 'update'])->name('student-count.update');

    Route::resource('categories', CategoryController::class);

    Route::resource('posts', PostController::class);
    Route::post('comments/{commentId}/show_hide', [PostController::class, 'showHide']);
});

Auth::routes();

Route::get('/home', [UiController::class, 'index'])->name('home');




