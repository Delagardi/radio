let mix = require('laravel-mix');

mix
    .sass('assets/scss/base.scss', 'public/css/')
    .sass('assets/scss/last_news.scss', 'public/css/')
    .sass('assets/scss/header.scss', 'public/css/')
    .sass('assets/scss/footer.scss', 'public/css/')
    .sass('assets/scss/upcoming_events.scss', 'public/css/')
    .sass('assets/scss/most_viewed.scss', 'public/css/')
    .sass('assets/scss/chat.scss', 'public/css/')
    .sass('assets/scss/latest_galleries.scss', 'public/css/')
    .copy('assets/lib/semantic/dist/semantic.min.css', 'public/lib/semantic/')
    .copy('assets/lib/semantic/dist/semantic.min.js', 'public/lib/semantic/')
    .copy('assets/lib/jquery/jquery.min.js', 'public/lib/jquery')
    .copyDirectory('assets/lib/semantic/dist/themes/default/assets/fonts', 'public/lib/semantic/themes/default/assets/fonts')
    .copyDirectory('assets/images', 'public/images')
    .js('assets/js/core.js', 'public/js')
    .styles([
        'public/css/base.css',
        'public/css/last_news.css',
        'public/css/header.css',
        'public/css/footer.css',
        'public/css/upcoming_events.css',
        'public/css/most_viewed.css',
        'public/css/chat.css',
        'public/css/latest_galleries.css',
    ], 'public/css/radio.css')
    .scripts([
        'public/js/core.js'
    ], 'public/js/radio.js') 
;