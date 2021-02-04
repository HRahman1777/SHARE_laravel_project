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
    return view('base');
});
/*
Route::get('home', function () {
    return view('home');
});
*/
Route::get('signup', function () {
    return view('signup');
});
Route::get('login', function () {
    return view('login');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('home', 'App\Http\Controllers\OneController@mhome')->name('mhome');

Route::post('note/home', 'App\Http\Controllers\OneController@nhome')->name('note.home');


Route::get('con', 'App\Http\Controllers\OneController@test')->name('conn');

Route::get('note/view/{id}', 'App\Http\Controllers\OneController@ndetails');
Route::get('note/delete/{id}', 'App\Http\Controllers\OneController@ndelete');

//<a href="{{ route('contact') }}">Contact</a></li>
//Route::get(md5('abc'), function () {  //md5 is generate a encpted value for abc.. we can use only string what we want to show
//    return view('contact');
//})->name('contact');
