<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //投稿機能
    Route::get('/', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/create', [PostController::class, 'create']);
    
    Route::post('/posts/like', [PostController::class, 'like'])->name('posts.like');
    Route::get('/posts/{post}', [PostController::class ,'show']);
    
    //カテゴリ分け
    Route::get('/categories/{category}', [CategoryController::class,'index']);
    
    
    //返信機能
    Route::get('/posts/{post}/reply', [ReplyController::class, 'create']);
    Route::post('/reply', [ReplyController::class, 'store']);
});

//Route::get('/posts', [PostController::class, 'index']);

require __DIR__.'/auth.php';
