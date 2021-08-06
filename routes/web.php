<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ArticleController,
    AuthController,
    AdminArticleController
};

Route::redirect('/admin', '/admin/article');
Route::resource('/admin/article', AdminArticleController::class)->middleware(['auth', 'admin-only']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::post('/comment', [ArticleController::class, 'comment'])->name('article.comment');
