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

mix.js('resources/js/index.js', 'public/dist/js/app.js')
    .react()
    .postCss('resources/css/app.css', 'public/dist/css', [
        require('tailwindcss'),
    ])
    .sourceMaps(false, 'source-map');

mix.webpackConfig({
    output: {
        chunkFilename: 'dist/js/chunks/app.[name][contenthash].js',
    },
});
