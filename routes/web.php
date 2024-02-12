<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/** 
 * LECON SUR LARAVEL
 */

Route::get('/test', function () {
    return 'GET ROUTE';
});

Route::post('/store', function () {
    return 'POST ROUTE';
});

Route::get('/articles/{id}/comments/{author?}', function ($id, $author = 'Jérémy') {
    return $author . ' a écrit un commentaire sur l\'article numéro : '. $id;
});

Route::prefix('admin')->group(function() {
    Route::get('users', function () {
        return 'Ma user list';
    });
    
    Route::get('articles', function () {
        return 'Ma liste d\'article';
    });
    
    Route::get('categories', function () {
        return 'Ma liste de catégories';
    });
});