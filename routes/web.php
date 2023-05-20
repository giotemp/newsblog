<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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


Route::get('/',[PublicController::class,'home'])->name('home');

Route::get('/profile', [PublicController::class,'profile'])->middleware(['auth'])->name('profile');


Route::prefix('article')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/create', [ArticleController::class,'create'])->name('article.create');
    Route::post('/store', [ArticleController::class,'store'])->name('article.store');
    Route::delete('/delete/{article}', [ArticleController::class,'destroy'])->name('article.delete');
});



Route::get('/author/list/{user}',[PublicController::class,'authorList'])->name('author.articles');


Route::get('/tag/create',[TagController::class,'create'])->middleware(['auth','is_admin'])->name('tag.create');

Route::post('/tag/store',[TagController::class,'store'])->middleware(['auth','is_admin'])->name('tag.store');