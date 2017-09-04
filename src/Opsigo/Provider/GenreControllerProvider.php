<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class GenreControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get("/get", "Opsigo\\Controller\\GenreController::get");

        return $controllers;
    }
}