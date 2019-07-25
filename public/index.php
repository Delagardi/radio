<?php

define('APP_DIR', realpath(__DIR__.'/..'));
define('INDEX_DIR', __DIR__);

$req = urldecode($_SERVER['REQUEST_URI']);
$qs = urldecode($_SERVER['QUERY_STRING']);
$baseUrl = substr($req, 0, strlen($req) - strlen($qs));
$baseUrl = rtrim($baseUrl,"?");
$baseUrl = rtrim($baseUrl,"/");
define('BASE_URL', $baseUrl);

function url($sub) {
    return BASE_URL.'/'.$sub;
}

include  APP_DIR . '/pages/home.php';