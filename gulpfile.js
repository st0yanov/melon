var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

const THEME_NAME = 'personal';

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.browserify('main.js', 'public/' + THEME_NAME + '/js/bundle.js', 'resources/assets/' + THEME_NAME + '/js');
});

elixir(function(mix) {
    mix.copy('resources/assets/' + THEME_NAME + '/semantic', 'public/' + THEME_NAME + '/semantic');
});