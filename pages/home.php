<!doctype html>

<html lang="en">
    <? include APP_DIR . '/partials/head.php' ?>

    <body>
        <? include APP_DIR . '/partials/header.php' ?>
        <div class="ui container">
            <div class="ui grid">
                <div class="row stackable">
                    <div class="ui nine wide tablet eleven wide computer column">
                        <? include APP_DIR . '/partials/last_news.php' ?>
                    </div>
                    <div class="ui seven wide tablet five wide computer column">
                        <? include APP_DIR . '/partials/shows.php' ?>
                    </div>
                </div>
                <div class="row">
                    <div class="ui column">
                        <? include APP_DIR . '/partials/upcoming_events.php' ?>
                    </div>
                </div>

                <div class="row stackable">
                    <div class="ui nine wide tablet eleven wide computer column">
                        
                    </div>
                    <div class="ui seven wide tablet five wide computer column">
                        <? include APP_DIR . '/partials/follow_us.php' ?>
                    </div>
                </div>

                <div class="row stackable">
                    <div class="ui nine wide tablet eleven wide computer column">
                        <? include APP_DIR . '/partials/chat.php' ?>
                    </div>
                    <div class="ui seven wide tablet five wide computer column">
                        <? include APP_DIR . '/partials/most_viewed.php' ?>
                    </div>
                </div>

                <div class="row">
                    <div class="ui column">
                        <? include APP_DIR . '/partials/latest_galleries.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <? include APP_DIR . '/partials/footer.php' ?>

        <script type="text/javascript" src="<?= url('lib/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('lib/semantic/semantic.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('js/radio.js') ?>"></script>
    </body>
</html>