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
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/view-test', function() {
    return view('test.test');
});


// ミドルウェアで認証済みでない(ログインしていない)ユーザーを弾く
Route::group(['middleware' => 'auth'], function () {

    // ミドルウェアで管理者(admin)以外を弾く
    Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
        Route::get('/', function() {
            return response()->json(['role' => 'admin']);
        });
        // draft(下書き)のチェック
        Route::group(['prefix' => 'draft-check'], function () {
            Route::get('/', 'User\Admin\DraftsCheckController@index')->name('admin.draft-check.index');
            Route::get('/{id}', 'User\Admin\DraftsCheckController@show')->name('admin.draft-check.show');
            Route::post('/{id}/reject', 'User\Admin\DraftsCheckController@reject')->name('admin.draft-check.reject');
            Route::post('/{id}/activate', 'User\Admin\DraftsCheckController@activate')->name('admin.draft-check.activate');
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

    // article(記事)
    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'Article\ArticlesController@index')->name('article.index');
        Route::get('/get/{id}', 'Article\ArticlesController@show')->name('article.show');
        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', 'Article\ArticlesController@adminIndex')->name('article.admin.index');
        });
        Route::group(['prefix' => 'committee'], function () {
            Route::get('/', 'Article\ArticlesController@committeeIndex')->name('article.committee.index');
        });
        Route::group(['prefix' => 'club'], function () {
            Route::get('/', 'Article\ArticlesController@clubIndex')->name('article.club.index');
        });
        Route::group(['prefix' => 'personal'], function () {
            Route::get('/', 'Article\ArticlesController@personalIndex')->name('article.personal.index');
        });
    });
});