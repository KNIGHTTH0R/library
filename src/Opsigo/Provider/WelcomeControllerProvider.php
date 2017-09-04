<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class WelcomeControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('index.html.twig');
        })->bind('home');

        return $controllers;
    }
}