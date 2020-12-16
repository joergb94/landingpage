const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
        'resources/css/swiper.css',
        'resources/css/magnific-popup.css',
        'resources/css/styles.css',
        ], 'public/css/all.css');

mix.scripts([
        'resources/js/js/jquery.easing.min.js',
        'resources/js/js/swiper.min.js',
        'resources/js/js/jquery.magnific-popup.js',
        'resources/js/js/validator.min.js',
        'resources/js/js/scripts.js',
        ], 'public/js/all.js');