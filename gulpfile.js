var gulp = require('gulp');
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

elixir.config.assetsPath = 'resources/assets/' + THEME_NAME;
elixir.config.publicPath = 'public/' + THEME_NAME;

elixir(function(mix) {
    mix.sass('manage.scss');
});

elixir(function(mix) {
    mix.browserify('main.js', elixir.config.publicPath + '/js/bundle.js');
});

elixir(function(mix) {
    mix.copy(elixir.config.assetsPath + '/semantic', elixir.config.publicPath + '/semantic');
});