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
    return view('home');
});

Route::get('/opinion', function () {
    return view('opinion');
});

Route::get('/write', function () {
    return view('write');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/view-test', function() {
    return view('view-test');
});


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

    // draft(下書き)
    Route::group(['prefix' => 'draft'], function () {
        Route::get('/', 'Article\DraftsController@index')->name('draft.index');
        Route::get('/create', 'Article\DraftsController@create')->name('draft.create');
        Route::post('', 'Article\DraftsController@store')->name('draft.store');
        Route::get('/{id}', 'Article\DraftsController@show')->name('draft.show');
        Route::get('/{id}/edit', 'Article\DraftsController@edit')->name('draft.edit');
        Route::post('/{id}', 'Article\DraftsController@update')->name('draft.update');
        Route::post('/{id}/submit', 'Article\DraftsController@submit')->name('draft.submit');
    });
});
