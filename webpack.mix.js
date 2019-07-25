let mix = require('laravel-mix');

mix
    .sass('assets/scss/base.scss', 'public/css/')
    .copyDirectory('assets/images', 'public/images')
    .styles([
        'assets/lib/semantic/semantic.min.css',
        'public/css/base.css'
    ], 'public/css/radio.css')
    .scripts([
        'assets/lib/jquery/jquery.min.js',
        'assets/lib/semantic/semantic.min.js',
        'public/css/base.css'
    ], 'public/js/radio.js') 
;