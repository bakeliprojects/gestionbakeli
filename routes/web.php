<?php

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

Route::resource('bakeliste', 'BakelisteController');
// Auth::routes();
Route::get('bakelist/{id}','BakelisteController@show');

Route::get('/home', 'HomeController@index')->name('home');


// route pour  generer le pdf

 Route::get('/', function () {
     return view('form');
 });
// pour le form .blade.php
Route::post('submitForm','BakelisteController@store');
// Route::post('sub','BakelisteController@create');


Route::get('/index','BakelisteController@index');
Route::get('information','BakelisteController@show');


//itinerer pour telecharcher le fichier  pdf

Route::get('/downloadPDF/{id}','BakelisteController@downloadPDF');