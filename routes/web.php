<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/profile', [PublicController::class,'profile'])->name('profile');

Route::get('/article/create', [ArticleController::class,'create'])->middleware('auth')->name('article.create');

Route::post('/article/store', [ArticleController::class,'store'])->middleware('auth')->name('article.store');

Route::get('/author/list/{user}',[PublicController::class,'authorList'])->name('author.articles');