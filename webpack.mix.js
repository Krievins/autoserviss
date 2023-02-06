const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */



    // SASSS

    mix.sass('resources/sass/app.scss', 'public/css')
        .sass('resources/sass/sessions/login.scss', 'public/css/sessions')
        .sass('resources/sass/layout/dashboard.scss', 'public/css')
        .sass('resources/sass/admin/users.scss', 'public/css/admin')
        .sass('resources/sass/admin/create_car.scss', 'public/css/admin')
        .sass('resources/sass/home/home.scss', 'public/css/home');

    // REACT

    mix.js('resources/js/app.js', 'js/app.js')
    .react();



    
