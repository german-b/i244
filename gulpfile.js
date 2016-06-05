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
    mix.sass('app.scss')
    	.styles(['./node_modules/normalize.css/normalize.css', './node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'])
        .browserify('app.js')
        .copy('vendor/bower_components/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap')
        .copy('./node_modules/moment/min/moment.min.js', 'public/js')
        .copy('./node_modules/eonasdan-bootstrap-datetimepicker/build/js', 'public/js');
});
