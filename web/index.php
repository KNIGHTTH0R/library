<?php

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';

$app['asset_app'] = $app['base_url'] . 'web/app/';
$app['asset_component'] = $app['base_url'] . 'web/components/';
$app['asset_js'] = $app['base_url'] . 'web/js/';
$app['asset_font'] = $app['base_url'] . 'web/fonts/';
$app['asset_css'] = $app['base_url'] . 'web/css/';
$app['asset'] = $app['base_url'] . 'web/';

$app->run();
