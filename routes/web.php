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

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'isAdmin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('user', 'Admin\UserController');
});

Route::group(['middleware' => ['auth', 'isProdusen']], function () {

    Route::get('/produsen-dashboard', function () {
        return view('produsen.dashboard');
    });

});

Route::group(['middleware' => ['auth', 'isDistributor']], function () {

    Route::get('/distributor-dashboard', function () {
        return view('distributor.dashboard');
    });

});
