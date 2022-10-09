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

Route::get('/comments/morning', [App\Http\Controllers\greetings::class, 'morning']);
Route::get('/comments/afternoon', [App\Http\Controllers\greetings::class, 'afternoon']);
Route::get('/comments/evening', [App\Http\Controllers\greetings::class, 'evening']);
Route::get('/comments/night', [App\Http\Controllers\greetings::class, 'night']);
Route::get('/comments/freeword/{word}', [App\Http\Controllers\greetings::class, 'freeword']);
Route::get('/comments/random', [App\Http\Controllers\greetings::class, 'random']);
