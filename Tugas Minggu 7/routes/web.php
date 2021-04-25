<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;

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

//ini adalah bab minggu ke 5
route::group(['namespace' => 'Frontend'], function()
	{
		route::resource('home', 'HomeController');
	});
route::group(['namespace' => 'Backend'], function()
	{
		route::resource('dashboard', 'DashboardController');
	});	
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ini adalah route minggu ke 7
Auth::routes();

Route::group(['namespace' => 'Frontend'], function ()
{
	route::resource('home','HomeController');
});


route::group(['middleware' => ['web','auth']], function(){
	route::resource('home','HomeController');
	route::group(['namespace'=>'Backend'], function ()
	{	
	route::resource('dashboard', 'DashboardController');
	});
});