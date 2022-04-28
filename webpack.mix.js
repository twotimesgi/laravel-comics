const mix = require('laravel-mix');
mix.browserSync('127.0.0.1:8000');
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
mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/partials/default.scss', 'public/css/partials').options({
    processCssUrls: false
});
mix.sass('resources/sass/partials/home.scss', 'public/css/partials').options({
    processCssUrls: false
});
mix.sass('resources/sass/partials/reset.scss', 'public/css/partials').options({
    processCssUrls: false
});
mix.sass('resources/sass/partials/detail.scss', 'public/css/partials').options({
    processCssUrls: false
});