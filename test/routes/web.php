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

Route::get('/','main@index')->name('init');

Route::get('contacto','contacto@index')->name('contacto');

Route::prefix('blog')->group(function (){
    Route::get('css','css@index')->name('css');
    Route::get('html','html@index')->name('html');
    Route::get('js','js@index')->name('js');
});

Route::middleware('auth')->group(function (){
    Route::get('administracion','admin@index')->name('administracion');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
