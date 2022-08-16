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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();


mix.sass("resources/scss/style.scss", "public/site/style.css").options({
    processCssUrls: false,
});

mix.postCss("resources/css/app.css", "public/site/css/").postCss(
    "resources/css/jquery-ui.css",
    "public/site/css/"
);

mix.copy("resources/css/fonts", "public/site/css/fonts");
mix.copy("resources/css/icons", "public/site/css/icons");
mix.copy("resources/dist", "public/site/dist");
mix.copy("resources/assets", "public/assets");
