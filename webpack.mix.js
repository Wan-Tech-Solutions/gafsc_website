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
    .js(
        [
            'resources/js/admin.js',
        ], 'public/js/admin.js')
    .js(
        [
            'resources/js/user.js',
        ], 'public/js/user.js')
    .js([
        'resources/custom/Scripts.js',
    ], 'public/js/scripts.js')
    .js([
        'resources/custom/UserScripts.js',
    ], 'public/js/user-scripts.js')
    .styles([
        'resources/custom/Style.css',
    ], 'public/css/style.css')
    .vue()


    .version()
    .sass('resources/sass/app.scss', 'public/css');


// webpack.mix.js
const path = require('path');

mix.webpackConfig({
    resolve: {
        alias: {
            ziggy: path.resolve('vendor/tightenco/ziggy/dist'),
        },
    },
});
