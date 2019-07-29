let mix = require('laravel-mix');

mix
    .sass('assets/scss/base.scss', 'public/css/')
    .copy('assets/lib/semantic/dist/semantic.min.css', 'public/lib/css')
    .copy('assets/lib/semantic/dist/semantic.min.js', 'public/lib/js')
    .copy('assets/lib/jquery/jquery.min.js', 'public/lib/js')
    .copyDirectory('assets/images', 'public/images')
    .styles([
        'public/css/base.css'
    ], 'public/css/radio.css')
    .scripts([
        'public/css/base.js'
    ], 'public/js/radio.js') 
;