<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RestAPI;

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

Route::get('/oldhome', function () {return view('welcome');});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::get('REST/cities', 'App\Http\Controllers\RestAPI@getCities');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	
	 Route::get('places', 'App\Http\Controllers\PostController@selectCity')->name('placescs');
	 Route::get('categories', 'App\Http\Controllers\CategoryController@index')->name('categories'); 



	 Route::get('cities', 'App\Http\Controllers\CityController@index')->name('cities');
	 // **********************  DELETE !  **********************************
 	 Route::get('upgrade', function () {return null;})->name('upgrade'); //X
	// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	 Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	// My Work
	Route::post('store-category', [CategoryController::class, 'store']);
	Route::post('store-city', [CityController::class, 'store']);
	Route::post('store-place',[PostController::class,'store']);


	Route::get('places/{cid}', 'App\Http\Controllers\PostController@indexCity');
	Route::get('places/{cid}/{pid}', 'App\Http\Controllers\PostController@editPlace');
	Route::post('places/{cid}/{pid}/save', 'App\Http\Controllers\PostController@savePlace');
	Route::get('places/{cid}/{pid}/gallery', 'App\Http\Controllers\PostController@editGallery');
	Route::post('places/{cid}/{pid}/gallery/store', 'App\Http\Controllers\PostController@saveMedia');
	Route::get('places/{cid}/{pid}/gallery/{mid}/defineAsThumb', 'App\Http\Controllers\PostController@defineThumb');
	Route::get('places/{cid}/{pid}/gallery/{mid}/delete', 'App\Http\Controllers\PostController@deleteMedia');
	Route::post('places/{cid}/{pid}/gallery/saveTitle', 'App\Http\Controllers\PostController@saveTitle');
	
});

	Route::get('REST/cities', 'App\Http\Controllers\RestAPI@getCities');
	Route::get('REST/{city}/places', 'App\Http\Controllers\RestAPI@getPlaces');
	Route::get('REST/{city}/{post}/thumb', 'App\Http\Controllers\RestAPI@getPlaceThumb');
	Route::get('REST/{city}/{post}/info', 'App\Http\Controllers\RestAPI@getPlaceInfo');
	Route::get('REST/{city}/{post}/geo', 'App\Http\Controllers\RestAPI@getPlaceGeo');
	Route::get('REST/{city}/{post}/meta', 'App\Http\Controllers\RestAPI@getPlaceMeta');
	Route::get('REST/{city}/{post}/gallery	', 'App\Http\Controllers\RestAPI@getGalleryIndex');
	Route::get('REST/{city}/{post}/gallery/{media}', 'App\Http\Controllers\RestAPI@getMedia');
	// Front End routes :

	Route::get('/',[FrontController::class,'viewHomePage'])->name('frontHome');
	Route::get('/discover',[FrontController::class,'viewDiscover'])->name('frontDiscover');

	Route::get('/view/{pid}',[FrontController::class,'viewPlace'])->name('viewPlace');




	

	Route::get('/contact',function(){return view('frontend.contact');})->name('frontContact');

	Route::get('/index.html',function(){return redirect('/');});
	Route::get('/about.html',function(){return redirect('/discover');});
	Route::get('/contact-us.html',function(){return redirect('/contact');});

	Route::get('/admin',function(){return redirect('/dashboard');});
	//frontend Admin
	Route::get('/maininfos',[FrontController::class,"showMainprefs"])->name('frontinfo');

	Route::get('/HomeInfos',[FrontController::class,"editHome"])->name('editHome');
	Route::post('/HomeInfos',[FrontController::class,"saveHome"]);
	
	Route::post('/maininfos',[FrontController::class,"saveMainPref"]);



