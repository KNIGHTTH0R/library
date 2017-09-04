<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;

$app = new Application();
$app['debug'] = true;

$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());

$app->register(new DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'perputakaan',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8mb4',
    ),
));

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

$app->mount('/', new Opsigo\Provider\WelcomeControllerProvider());
$app->mount('/book', new Opsigo\Provider\BookControllerProvider());
$app->mount('/genre', new Opsigo\Provider\GenreControllerProvider());
$app->mount('/publisher', new Opsigo\Provider\PublisherControllerProvider());
$app->mount('/author', new Opsigo\Provider\AuthorControllerProvider());
$app->mount('/member', new Opsigo\Provider\MemberControllerProvider());
$app->mount('/rent', new Opsigo\Provider\RentControllerProvider());
$app->mount('/report', new Opsigo\Provider\ReportControllerProvider());

$app['request'] = Request::createFromGlobals();

return $app;
