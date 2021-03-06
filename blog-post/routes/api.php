<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('posts/{id}', [PostTestController::class, 'show']);
// Route::get('posts/', [PostTestController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::resource('posts', PostController::class); //nema [] ovih zagrada
//Route::resource('users', UserController::class); //nema [] ovih zagrada
//Route::get('users/{id}/posts', [UserPostController::class, 'index'])->name('users.posts.index');
Route::resource('users.posts', UserPostController::class)->only(['index']);
Route::resource('categories', CategoryController::class);
Route::get('/category/{id}', [CategoryController::class, 'show']);
