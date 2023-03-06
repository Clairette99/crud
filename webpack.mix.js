const mix = require('laravel-mix');

mix.js('ressources/js/app.js', 'public.js')
    .postCss('ressources/css/app.css','public/css',[
        //
    ]);