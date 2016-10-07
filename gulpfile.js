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

var paths = {
    'libs': './resources/assets/libs/',
    'adminlte': './resources/assets/libs/AdminLTE/'
}

elixir(function(mix) {
    mix.styles([
		paths.adminlte + 'bootstrap/css/bootstrap.min.css',
		paths.adminlte + 'dist/css/skins/skin-green.min.css',
		paths.adminlte + 'plugins/iCheck/minimal/green.css',
		paths.adminlte + 'plugins/select2/select2.min.css',
		paths.adminlte + 'plugins/datepicker/datepicker3.css',
		paths.adminlte + 'dist/css/AdminLTE.min.css',
		paths.libs + 'font-awesome/css/font-awesome.min.css',
		paths.libs + 'datatables.net-bs/css/dataTables.bootstrap.css',
		paths.libs + 'datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
    ], 'public/css/vendor.min.css');
});

elixir(function(mix) {
    mix.scripts([
        paths.libs + 'underscore/underscore.js',
        paths.libs + 'backbone/backbone.js',
        paths.libs + 'underscore/underscore.js',
	 	paths.libs + 'backbone/backbone.js',
	 	paths.libs + 'moment/moment.js',
	 	paths.libs + 'moment/locale/es.js',
	 	paths.libs + 'alertify.js/dist/js/alertify.js',
    	paths.adminlte + 'plugins/jQuery/jquery-2.2.3.min.js'
    ], 'public/js/vendor.min.js')
    .scripts([
        'models/*.js',
        'collections/*.js',
        'views/**/*.js',
        'routers/*.js',
        'helpers/misc.js',
        'helpers/routes.js',
        'init.js'
    ], 'public/js/app.min.js')
});

elixir(function(mix) {
    mix.copy(paths.adminlte + 'bootstrap/fonts/', 'public/fonts');
    mix.copy(paths.libs + 'font-awesome/fonts/', 'public/fonts');
});

