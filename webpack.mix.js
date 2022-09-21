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

mix.webpackConfig({ devtool: 'source-map' });
mix.js('resources/js/app-vue.js', 'public/js')
    .vue({
        options: {
            compilerOptions: {
                isCustomElement: (tag) => ['md-linedivider'].includes(tag),
            },
        },
    })
    .sass('resources/scss/app.scss', 'public/css').webpackConfig({
        stats: {
            children: true,
        }
    });

// mix.js('resources/js/app.js', 'public/js')
//     .postCss("resources/css/app.css", "public/css", [
//         require("tailwindcss"),
//     ]);
