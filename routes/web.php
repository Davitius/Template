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


Route::get('/{langCP}/control-panel', 'App\Http\Controllers\CP\CpController@index')->name('Controlpanel');



Route::group(['middleware' => 'Admin'], function () {

    //Palette
    Route::get('/{langPal}/palette', 'App\Http\Controllers\CP\PaletteController@index')->name('Palette');

    Route::patch('/{BgUpLang}/cp/palette/bgupdate', 'App\Http\Controllers\CP\Palette\BgUpdateController@update')->name('BgUpdate');
    Route::patch('/{MenuUpLang}/cp/palette/menuupdate', 'App\Http\Controllers\CP\Palette\MenuUpdateController@update')->name('MenuUpdate');
    Route::patch('/{UlUpLang}/cp/palette/ulupdate/{CarouselNumber}', 'App\Http\Controllers\CP\Palette\UlUpdateController@update')->name('UsefullinksUpdate');
    Route::patch('/{BlockUpLang}/cp/palette/blockupdate/{Block_N}', 'App\Http\Controllers\CP\Palette\BlockUpdateController@update')->name('BlockUpdate');


    Route::get('/{langImg}/constructor', 'App\Http\Controllers\CP\Constructor\ConstructorController@index')->name('Constructor');
    Route::patch('/{langHeader}/constructor/headertype', 'App\Http\Controllers\CP\Constructor\HeaderTypeController@update')->name('HeaderType');
    Route::patch('/{langHeader}/constructor/headerupdate', 'App\Http\Controllers\CP\Constructor\HeaderUpdateController@update')->name('HeaderUpdate');
    Route::patch('/{langHeader}/constructor/sliderupdate/{SlideId}', 'App\Http\Controllers\CP\Constructor\SliderUpdateController@update')->name('SliderUpdate');
    Route::patch('/{langHeader}/constructor/footerwordupdate/{FooterWordId}', 'App\Http\Controllers\CP\Constructor\FooterWordsUpdateController@update')->name('FooterWordUpdate');
    Route::patch('/{langHeader}/constructor/footericonupdate/{FooterIconId}', 'App\Http\Controllers\CP\Constructor\FooterIconsUpdateController@update')->name('FooterIconUpdate');
    Route::post('/{langHeader}/constructor/usefullinksadd', 'App\Http\Controllers\CP\Constructor\UsefullinksController@create')->name('UsefullinksCreate');
    Route::get('/{langHeader}/constructor/usefullinksdelete/{UsefullinksId}', 'App\Http\Controllers\CP\Constructor\UsefullinksController@delete')->name('UsefullinksDelete');

    Route::get('/{langCP}/control-panel/contact', 'App\Http\Controllers\CP\Contact\ContactController@index')->name('CpContact');
    Route::patch('/{langCP}/cp/contact/update', 'App\Http\Controllers\CP\Contact\ContactUpdateController@update')->name('ContactUpdate');
    Route::patch('/{langCP}/cp/location/update', 'App\Http\Controllers\CP\Contact\LocationUpdateController@update')->name('LocationUpdate');

    Route::get('/{langCP}/control-panel/posts', 'App\Http\Controllers\CP\Posts\PostController@index')->name('CpPosts');
    Route::get('/{langCP}/control-panel/NewPost', 'App\Http\Controllers\CP\Posts\NewPostController@index')->name('CpNewPost');
    Route::post('/{langCP}/control-panel/Addpost', 'App\Http\Controllers\CP\Posts\AddPostController@create')->name('CpAddPost');
    Route::get('/{langCP}/control-panel/PostDetails/{Type}/{PostId}', 'App\Http\Controllers\CP\Posts\PostDetailsController@index')->name('CpPostDetails');
    Route::patch('/{langCP}/cp/location/update/{TypeUpdate}/Post/{_PostId}', 'App\Http\Controllers\CP\Posts\UpdatePostController@update')->name('CpUpdatePost');
    Route::get('/{langCP}/control-panel/PostDetails/{_PostId}', 'App\Http\Controllers\CP\Posts\DeletePostController@delete')->name('CpDeletePost');
    Route::get('/{langCP}/control-panel/posts/search', 'App\Http\Controllers\CP\Posts\PostSearchController@index')->name('CpPostsSearch');



});









Route::get('/', 'App\Http\Controllers\IndexController@index')->name('/');
Route::get('/{language}/welcome', 'App\Http\Controllers\IndexLangController@index')->name('/lang');

Route::get('/{language}/login', 'App\Http\Controllers\MainLoginController@index')->name('MainLogin');
Route::get('/{language}/register', 'App\Http\Controllers\MainRegisterController@index')->name('MainRegister');



Route::get('/{langCP}/search', 'App\Http\Controllers\Search\SearchController@search')->name('Search');


Route::get('/{langnews}/news', 'App\Http\Controllers\News\NewsController@index')->name('News');
Route::get('/{langnew}/news/details/{newid}', 'App\Http\Controllers\News\NewsDetailsController@index')->name('NewsDetails');

Route::get('/{lang}/contact', 'App\Http\Controllers\About\ContactController@index')->name('Contact');
Route::get('/{langabout}/about', 'App\Http\Controllers\About\AboutController@index')->name('About');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
