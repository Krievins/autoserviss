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

    mix.copy('node_modules/chart.js/dist/chart.js', 'public/chart.js/chart.js');


    // SASSS

    mix.sass('resources/sass/app.scss', 'public/css')
        .sass('resources/sass/sessions/login.scss', 'public/css/sessions')
        .sass('resources/sass/layout/dashboard.scss', 'public/css')
        .sass('resources/sass/admin/index.scss', 'public/css/admin')

        // Users
        .sass('resources/sass/admin/Users/users.scss', 'public/css/admin/Users')
        .sass('resources/sass/admin/Users/create_user.scss', 'public/css/admin/Users')

        // Cars
        .sass('resources/sass/admin/Cars/create_car.scss', 'public/css/admin/Cars')
        .sass('resources/sass/admin/Cars/view_car.scss', 'public/css/admin/Cars')
        .sass('resources/sass/admin/Cars/cars.scss', 'public/css/admin/Cars')

        // Category
        .sass('resources/sass/admin/Category/create_category.scss', 'public/css/admin/Category')
        .sass('resources/sass/admin/Category/category.scss', 'public/css/admin/Category')
        
        
        .sass('resources/sass/home/home.scss', 'public/css/home');



    // REACT

    mix.js('resources/js/app.js', 'js/app.js')

    .react();



    
