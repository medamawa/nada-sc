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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// ミドルウェアで認証済みでない(ログインしていない)ユーザーを弾く
Route::group(['middleware' => 'auth'], function () {

    // ミドルウェアで管理者(admin)以外を弾く
    Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
        Route::get('/', function() {
            return response()->json(['role' => 'admin']);
        });
    });

    // ミドルウェアで委員会アカウント以外を弾く
    Route::group(['prefix' => 'committee', 'middleware' => 'auth.committee'], function () {
        Route::get('/', function() {
            return response()->json(['role' => 'committee']);
        });
    });

    // ミドルウェアでクラブアカウント以外を弾く
    Route::group(['prefix' => 'club', 'middleware' => 'auth.club'], function () {
        Route::get('/', function() {
            return response()->json(['role' => 'club']);
        });
    });

    // ミドルウェアで一般アカウント(general)以外を弾く
    Route::group(['prefix' => 'general', 'middleware' => 'auth.general'], function () {
        Route::get('/', function() {
            return response()->json(['role' => 'general']);
        });
    });
});