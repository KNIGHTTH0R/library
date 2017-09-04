<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class ReportControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('report.html.twig');
        })->bind('report');
        $controllers->get("/get", "Opsigo\\Controller\\ReportController::get");

        return $controllers;
    }
}