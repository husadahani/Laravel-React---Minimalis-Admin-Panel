const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/admin/js/app.js', 'public/js/admin.js')
   .js('resources/js/public.js', 'public/js/public.js')
   .js('resources/admin/js/login.js', 'public/js/admin-login.js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .postCss('resources/admin/css/app.css', 'public/css/admin.css', [
       require('tailwindcss'),
   ])
   .postCss('resources/admin/css/login.css', 'public/css/admin-login.css', [
       require('tailwindcss'),
   ])
   .postCss('resources/css/public.css', 'public/css/public.css', [
       require('tailwindcss'),
   ])
   .options({
       processCssUrls: false
   })
   .version();