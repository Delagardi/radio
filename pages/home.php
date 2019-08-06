<!doctype html>

<html lang="en">
    <? include APP_DIR . '/partials/head.php' ?>

    <body class="homepage">
        <? include APP_DIR . '/partials/sidebar_radio.php' ?>
        <div class="pusher">
            <? include APP_DIR . '/partials/header.php' ?>
            <div class="ui divider hidden"></div>
            <div class="ui container">
                <div class="ui grid stackable">
                    <div class="ui nine wide tablet eleven wide computer column">
                        <? include APP_DIR . '/partials/last_news.php' ?>
                    </div>
                    <div class="ui seven wide tablet five wide computer column extra">
                        <? include APP_DIR . '/partials/shows.php' ?>
                    </div>
                

                    <div class="ui column sixteen wide">
                        <? include APP_DIR . '/partials/upcoming_events.php' ?>
                    </div>

                    <div class="ui nine wide tablet eleven wide computer column">
                        <? include APP_DIR . '/partials/latest_videos.php' ?>
                    </div>
                    <div class="ui seven wide tablet five wide computer column extra">
                        <? include APP_DIR . '/partials/follow_us.php' ?>
                    </div>

                    <div class="ui nine wide tablet eleven wide computer column">
                        <? include APP_DIR . '/partials/chat.php' ?>
                    </div>
                    <div class="ui seven wide tablet five wide computer column extra">
                        <? include APP_DIR . '/partials/most_viewed.php' ?>
                    </div>

                    <div class="ui column sixteen wide">
                        <? include APP_DIR . '/partials/latest_galleries.php' ?>
                    </div>

                    <div class="ui nine wide tablet eleven wide computer column">
                    </div>
                    <div class="ui seven wide tablet five wide computer column extra">
                        <? include APP_DIR . '/partials/survey.php' ?>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?= url('lib/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('lib/semantic/semantic.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('lib/css-vars-ponyfill/css-vars-ponyfill.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('js/radio.js') ?>"></script>
    </body>
</html>