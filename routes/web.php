<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index' )->name('home');

Route::resource('/comics', 'ComicController');
//Route::resource('/comics', ComicController::class);

Route::get('/show{key}', function ($key) {
    
    $comics = config('comics');

    if( is_numeric($key) && $key >= 0 && $key < count($comics) ){
        $single_comic = $comics[$key];
    } else {
        abort(404);
    }

    

    return view('show', compact('single_comic'));
})->name('show.comic');