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
    ])
    .sass('login.scss','public/css')
    .sass('backend.scss','public/css')
    // .webpack('app.js')
    .scripts([
        // 'frontend/frontend.js',
        // 'frontend/dvgoogleadwords.js',
        'frontend/scripts.js'
    ],'public/js/scripts.js')
    .scripts('backend/login/login.js','public/js')
    .scripts([
        'backend/tintuc/tintuc.js'
    ],'public/js/backend.js')
    .copy(
    'node_modules/font-awesome/fonts/**', 'public/fonts'
    )
    .scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        './node_modules/wow.js/dist/wow.min.js',
        './node_modules/waypoints/lib/noframework.waypoints.min.js',
        './node_modules/countup.js/dist/countUp.min.js',
        'rdNavbar/core.min.js',
        './node_modules/slick-carousel/slick/slick.min.js',
    ],'public/js/core.js')
    // .copy('node_modules/wow.js/dist/wow.min.js','public/js')
    // .copy('node_modules/waypoints/lib/noframework.waypoints.min.js','public/js')
    // .copy('node_modules/countup.js/dist/countUp.min.js','public/js')
    .copy('resources/assets/banner/','public/css/banner')
    .copy('resources/assets/js/banner/','public/js/banner');
});
