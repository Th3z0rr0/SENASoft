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

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/


mix.styles(
    [
      'resources/coreui/css/coreui.css'
    ],'public/css/app.css')
    .scripts(
        [
        'resources/coreui/js/coreui.bundle.min.js',
        'resources/coreui/js/svgxuse.min.js',
        ],'public/js/app.js');
