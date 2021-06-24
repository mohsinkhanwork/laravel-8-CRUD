<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\LajuCOntroller;
use app\Http\Controllers\GameCOntroller;



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

// Route::get('/laju', 'LajuCOntroller@index')->name('lajumail.sign_up');




Route::get('/', function () {
    return view('welcome');
});

Route::resource('/car', 'GameCOntroller');
