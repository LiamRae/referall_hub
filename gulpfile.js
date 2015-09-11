process.env.DISABLE_NOTIFIER = true
var elixir = require('laravel-elixir');
             require('laravel-elixir-livereload');
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

elixir(function(mix) {
    mix.livereload();

    mix.sass('app.scss');

    mix.scripts([
        'libs/jquery-2.1.4.min.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js'
    ]);
});
