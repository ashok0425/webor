
let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/frontend/js').postCss('resources/css/app.css', 'public/frontend/css', [
    require('tailwindcss'),
]);
mix.browserSync({
    proxy: 'localhost:8000',
});