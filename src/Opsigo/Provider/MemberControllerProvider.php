<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class MemberControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get("/get", "Opsigo\\Controller\\MemberController::get");

        return $controllers;
    }
}