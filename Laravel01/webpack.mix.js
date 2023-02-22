const mix = require('laravel-mix');

mix.scripts([
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/my-script.js',
],  'public/js/my-app.js').version();
mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/my-style.css',
],  'public/css/my-app.css').version();

// mix.scripts([
//     'resources/js/my-script.js',
//     'resources/js/my-script-console.js',
// ],  'public/js/my-app.js').version();

// mix.sass('resources/sass/app.scss','public/css/my-app.css');

// mix.scripts([
//     'resources/js/my-script.js',
//     'resources/js/my-script-console.js',
// ],  'public/js/my-app.js');

// mix.sass('resources/sass/app.scss','public/css/my-app.css');

// mix.scripts([
//     'resources/js/my-script.js',
//     'resources/js/my-script-console.js',
// ],  'public/js/my-app.js');

// mix.styles([
//     'resources/css/my-style.css',
//     'resources/css/my-style-h1.css',
// ],  'public/css/my-app.css');

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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
