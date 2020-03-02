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
// route with view
Route::get('/', function () {
	return view('welcome');
});

// route with params
Route::get('hello/{ten}', function ($ten) {
	return "Hello " . $ten;
});

// route with regrex, make sure param should be like regrex below
Route::get('today/{day}', function ($day) {
	return 'Today is ' . $day;
})->where(['day' => '[0-9]{8}']);

// route naming (if you want any other route can redirect to this route)
// first way
Route::get('Route1',['as'=>'MyRoute',function(){
	return "this is route 1";
}]);

Route::get('Route2', function(){
	return redirect()->route('MyRoute');
});

// second way to naming
Route::get('Route3', function(){
	return "this is route 3";
})->name('MyRoute2');

Route::get('Route4', function(){
	return redirect()->route('MyRoute2');
});

// route group
Route::group(['prefix'=>'Group1'], function(){
	// call this route: domain/Group1/R1
	Route::get('R1', function(){
		return "R1";
	});
	// call this route: domain/Group1/R2
	Route::get('R2', function(){
		return "R2";
	});
});

// call a controller
Route::get('routeName','MyController@testAction');

// send params to Controller
Route::get('sendThisParam/{sendingParam}', 'MyController@testParams');

// working with URL
Route::get('myRequest','MyController@getURL');