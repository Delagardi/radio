let mix = require('laravel-mix');

mix
    .sass('assets/scss/base.scss', 'public/css/')
    .sass('assets/scss/last_news.scss', 'public/css/')
    .sass('assets/scss/header.scss', 'public/css/')
    .sass('assets/scss/footer.scss', 'public/css/')
    .sass('assets/scss/upcoming_events.scss', 'public/css/')
    .sass('assets/scss/most_viewed.scss', 'public/css/')
    .sass('assets/scss/chat.scss', 'public/css/')
    .sass('assets/scss/survey.scss', 'public/css/')
    .sass('assets/scss/on_demand.scss', 'public/css/')
    .sass('assets/scss/signup_popup.scss', 'public/css/')
    .sass('assets/scss/latest_galleries.scss', 'public/css/')
    .sass('assets/scss/follow_us.scss', 'public/css/')
    .sass('assets/scss/shows.scss', 'public/css/')
    .sass('assets/scss/latest_videos.scss', 'public/css/')
    .sass('assets/scss/sidebar_radio.scss', 'public/css/')
    .sass('assets/scss/homepage.scss', 'public/css/')
    .sass('assets/scss/weather.scss', 'public/css/').options({processCssUrls: false})
    .copy('assets/lib/semantic/dist/semantic.min.css', 'public/lib/semantic/')
    .copy('assets/lib/semantic/dist/semantic.min.js', 'public/lib/semantic/')
    .copy('assets/lib/jquery/jquery.min.js', 'public/lib/jquery')
    .copy('node_modules/css-vars-ponyfill/dist/css-vars-ponyfill.min.js', 'public/lib/css-vars-ponyfill/')
    .copyDirectory('assets/lib/semantic/dist/themes/default/assets/fonts', 'public/lib/semantic/themes/default/assets/fonts')
    .copyDirectory('assets/images', 'public/images')
    .js('assets/js/core.js', 'public/js')
    .js('assets/js/homepage.js', 'public/js')
    .styles([
        'public/css/base.css',
        'public/css/last_news.css',
        'public/css/header.css',
        'public/css/footer.css',
        'public/css/upcoming_events.css',
        'public/css/most_viewed.css',
        'public/css/chat.css',
        'public/css/survey.css',
        'public/css/on_demand.css',
        'public/css/signup_popup.css',
        'public/css/latest_galleries.css',
        'public/css/follow_us.css',
        'public/css/shows.css',
        'public/css/latest_videos.css',
        'public/css/sidebar_radio.css',
        'public/css/homepage.css',
        'public/css/weather.css',
    ], 'public/css/radio.css')
    .scripts([
        'public/js/core.js',
        'public/js/homepage.js'
    ], 'public/js/radio.js') 
;