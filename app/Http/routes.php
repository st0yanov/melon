<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
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
        Route::get('/login', 'AuthController@showLoginForm')->name('login');
        Route::post('/login', 'AuthController@login');
        Route::get('/logout', 'AuthController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'AuthController@showRegistrationForm')->name('register');
        Route::post('register', 'AuthController@register');

        // Password Reset Routes...
        Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('password.reset');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');
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

Route::get('/c3/{extra}', function () {
    require base_path('c3.php');
})->where('extra', '.*');
