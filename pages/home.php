<!doctype html>

<html lang="en">
    <? include APP_DIR . '/partials/head.php' ?>

    <body>
        <? include APP_DIR . '/partials/header.php' ?>
        <div class="ui container">
            <? include APP_DIR . '/partials/last_news.php' ?>
            <? include APP_DIR . '/partials/upcoming_events.php' ?>
        </div>
        <? include APP_DIR . '/partials/footer.php' ?>

        <script type="text/javascript" src="<?= url('lib/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('lib/semantic/semantic.min.js') ?>"></script>
        <script type="text/javascript" src="<?= url('js/radio.js') ?>"></script>
    </body>
</html>