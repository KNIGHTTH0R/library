<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class PublisherControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get("/get", "Opsigo\\Controller\\PublisherController::get");

        return $controllers;
    }
}