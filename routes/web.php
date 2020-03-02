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
