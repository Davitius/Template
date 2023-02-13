<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('/');
Route::get('/{language}/welcome', 'App\Http\Controllers\IndexLangController@index')->name('/lang');

Route::get('/{langnews}/news', 'App\Http\Controllers\News\NewsController@index')->name('News');
Route::get('/{langnew}/news/{newid}/details', 'App\Http\Controllers\News\NewsDetailsController@index')->name('NewsDetails');

Route::get('/{lang}/contact', 'App\Http\Controllers\Ebout\ContactController@index')->name('Contact');
Route::get('/{langebout}/ebout', 'App\Http\Controllers\Ebout\EboutController@index')->name('Ebout');








//Route::get('/MenuSearch', 'MenuSearchController@search')->name('menusearch');
//Route::get('/Search', 'SearchController@search')->name('search');
//Route::get('/Salon{SalonId}', 'SalonController@index')->name('Salon');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
