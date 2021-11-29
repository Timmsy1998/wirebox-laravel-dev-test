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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dictionary-terms', 'App\Http\Controllers\DictionaryController@index');
Route::get('/dictionary-terms/add', 'App\Http\Controllers\DictionaryController@add');
Route::post('/dictionary-terms', 'App\Http\Controllers\DictionaryController@store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
