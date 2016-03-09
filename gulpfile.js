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

elixir(function(mix) {
    mix.sass([
    	'../bower/Materialize/sass/materialize.scss',
    	'app.scss'
    ],'public/assets/css/app.css');

    mix.styles([
    	'style.css'
    ],'public/assets/css/vendor.css');

    mix.scripts([
	    '../bower/jquery/dist/jquery.min.js',
	    '../bower/Materialize/dist/js/materialize.min.js',
	    'main.js'
	], 'public/assets/js/vendor.js');
});
