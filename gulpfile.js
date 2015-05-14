var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	mix.sass('app.scss','resources/css');


	mix.styles([
		'app.css',
		'libs/bootstrap.min.css',
		'libs/select2.min.css',
		'libs/roboto300css.css'
	],null,'resources/css');



	mix.scripts([
		'libs/jquery.js',
		'libs/bootstrap.min.js',
		'libs/select2.min.js'
	],null,'resources/js');

    mix.version('public/css/all.css');
//	mix.version('public/js/all.js');
//	mix.styles(['vendor/normalize.css','app.css'],null,'public/css');
//	mix.version('public/css/all.css');
	 //mix.phpUnit();
	//mix.phpUnit().phpSpec();
//    mix.sass('app.scss').coffee();
//
//	mix.styles([
//	'vendor/normalize.css',
//	'app.css'
//
//	],'public/output/final.css','public/css');

//	mix.scripts([
//	'vendor/jquery.js',
//	'main.js',
//	'coupon.js'],'public/output/script.js','public/js');
});
