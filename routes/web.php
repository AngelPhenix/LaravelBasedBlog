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
 * LECON SUR LARAVEL 001 ROUTING
 */


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

/** 
 * LECON SUR LARAVEL 002 RESPONSES
 */

Route::prefix('test')->group(function() {
    Route::get('articles', function () {
        return redirect('/try/articles');
    });

    Route::get('users', function () {
        return response()->json([
            'name' => 'Jérémy',
            'age' => 33
        ]);
    });
});

/** 
 * LECON SUR LARAVEL 003 VIEWS
 */

Route::get('/test', function () {
    return view('test');
});

Route::get('/view', function () {
    return view('folder.view');
});

Route::get('/test/{id}', function ($id) {
    return view('test', [
        'id' => $id
    ]);
});