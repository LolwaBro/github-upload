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
    return view('login');
});

Route::post('formSubmit','App\Http\Controllers\User@login');

Route::post('logout','App\Http\Controllers\User@logout');



/*Route::view('home','home');

Route::view('about','about');

Route::view('services','services');*/


Route::group(['middleware' => ['UserAuth']], function () {
	Route::view('home','home');

	Route::view('about','about');

	Route::view('services','services');
});