<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/home', [MainController::class, 'home'])->name('home');

Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [MainController::class, 'show'])->name('article');

Auth::routes();

Route::get('/admin/articles', [ArticleController::class, 'index'])->middleware('admin')->name('article.index');
Route::get('/admin/articles/create', [ArticleController::class, 'create'])->middleware('admin')->name('article.create');
Route::post('/admin/articles/store', [ArticleController::class, 'store'])->middleware('admin')->name('article.store');