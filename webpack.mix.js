const mix = require('laravel-mix');

mix.copy(['resources/assets/image/website'], 'public/image/website')
mix.styles(['resources/assets/css/website.css'], 'public/css/website.css')
mix.js(['resources/assets/js/website.js'], 'public/js/website.js')