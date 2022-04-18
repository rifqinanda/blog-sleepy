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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AdminController@landingpage');

Route::middleware(['checkAuth'])->group(function () {
	Route::get('/admin/login', 'LoginController@login');
	Route::post('/admin/savelogin', 'LoginController@savelogin');
});

Route::middleware(['checkSession'])->group(function () {
	Route::get('/admin/dashboard', 'AdminController@dashboard');
	Route::resource('/admin/blog', 'BlogController');
	Route::post('/admin/logout', 'LoginController@logout');
});
