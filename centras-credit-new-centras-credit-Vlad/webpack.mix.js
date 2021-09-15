const mix = require('laravel-mix');

const dotenv = require("dotenv");

let env = dotenv.config().parsed;

// mix.copy('resources/static/explain.pdf', 'public/explain.pdf');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/styles/style.scss', 'public/css', [
        //
    ]);

if (env && !mix.inProduction()) {
    mix
        .browserSync({
            proxy: env.APP_URL,
        })
        .sourceMaps()
        .disableNotifications();
}
