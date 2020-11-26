const mix = require('laravel-mix');
require("laravel-mix-vue3");
mix.vue3('resources/ts/app.ts', 'public/js')
