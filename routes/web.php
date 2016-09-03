<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

// Authentication Group
Route::group(
    [
        'namespace' => 'Auth',
        'as' => 'auth::',
    ],
    function () {
        // Authentication Routes...
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
        Route::post('password/reset', 'ResetPasswordController@reset');
    }
);

// Manage Group
Route::group(
    [
        'namespace' => 'Manage',
        'prefix' => 'manage',
        'as' => 'manage::',
        'middleware' => ['auth', 'role:owner|admin'],
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::resource('article', 'ArticleController');
    }
);

// CodeCeption Coverage Tool - testing environment only
if (env('APP_ENV') == 'testing') {
    Route::get('/c3/{extra}', function () {
        require base_path('c3.php');
    })->where('extra', '.*');
}
