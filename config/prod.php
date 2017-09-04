<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['base_url'] = 'http://' . @$_SERVER[HTTP_HOST] . '/perpustakaan/';
