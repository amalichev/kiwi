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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function() {
        Route::get('/', [
            'as' => 'home',
            'uses' => 'HomeController@index'
        ]);

        Route::get('/user/{id}', [
            'as' => 'profile',
            'uses' => 'UserController@show'
        ])->where('id', '[0-9]+');

        Route::get('/users', [
            'as' => 'users',
            'uses' => 'UserController@index'
        ]);

        Route::get('home', function() {
            return redirect()->route('home');
        });

        Auth::routes();
    }
);
