const elixir = require('laravel-elixir');
elixir.config.sourcemaps=false;

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass([
        'app.scss',
        ''
    ])
    .webpack('app.js')
    .scripts([
        'frontend/frontend.js',
        'frontend/dvgoogleadwords.js',
    ],'public/js/smartlinks.js')
    .copy(
    'node_modules/font-awesome/fonts/**', 'public/fonts'
    )
    .copy('node_modules/wow.js/dist/wow.min.js','public/js')
    .copy('node_modules/waypoints/lib/noframework.waypoints.min.js','public/js')
    .copy('node_modules/countup.js/dist/countUp.min.js','public/js');
});
