<?php

use Illuminate\Support\Facades\Route;
//use JoggApp\GoogleTranslate\GoogleTranslate;
//Maybe remove use GoogleTranslate
//use GoogleTranslate as GT;
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

//use Google\Cloud\Translate\TranslateClient;



Route::get('/', function () {


    //GoogleTranslate::detectLanguage('Hello world');
  
    return view('welcome');
});

Auth::routes();

Route::get('/home/{user}', 'HomeController@index')->name('home.show');
Route::get('/translator/{user}', 'TranslatorController@index')->name('translator.show');
Route::get('/admin/{user}', 'AdminController@index')->name('admin.show');
Route::post('/card', 'CardController@store');
Route::post('/result/{cid}', 'ResultController@redirect')->name('result.show');
Route::get('/view', 'TranslatorController@view')->name('view.show');
Route::get('/cards/translate/{cid}', 'CardController@translate');
Route::post('/submit/{cid}', 'TranslatorController@submit');
Route::get('/history', 'HomeController@history')->name('history.show');
