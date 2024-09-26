const mix = require('laravel-mix');

// Mix Asset Management
mix.js('resources/js/app.js', 'public/js') // if you are using app.js
   .css('resources/css/app.css', 'public/css') // Only this line for your CSS
   .version(); // Optional for cache-busting
