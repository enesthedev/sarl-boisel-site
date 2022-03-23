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

mix.disableNotifications();

mix.js('resources/js/runtime.js', 'public/scripts');
mix.js('resources/js/alpine.js', 'public/scripts');

mix.options({
        processCssUrls: false
    })
    .postCss('resources/css/tailwind.css', 'public/styles/tailwind.css', [
            require('tailwindcss'),
            require('autoprefixer')
        ]
    );

mix.css('resources/css/rtl.css', 'public/styles/rtl.css');

mix.copyDirectory(
    'resources/images/',
    'public/images/'
)

if (mix.inProduction())
    mix.version();
