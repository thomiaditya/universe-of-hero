const mix = require("laravel-mix");

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

// Change the public path.
mix.setPublicPath("public_html/");

// Set all the paths.
mix.js("resources/js/app.js", "public_html/js");
mix.sass("resources/sass/app.scss", "public_html/css");
