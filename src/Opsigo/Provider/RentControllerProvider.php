<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class RentControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('rent.html.twig');
        })->bind('rent');
        $controllers->get("/get", "Opsigo\\Controller\\RentController::get");

        return $controllers;
    }
}