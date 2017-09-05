<?php

namespace Opsigo\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class BookControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('book.html.twig');
        })->bind('book');
        $controllers->get("/get", "Opsigo\\Controller\\BookController::get");
        $controllers->post("/add", "Opsigo\\Controller\\BookController::add");
        $controllers->post("/edit/{id}", "Opsigo\\Controller\\BookController::edit");
        $controllers->get("/delete/{id}", "Opsigo\\Controller\\BookController::delete");

        return $controllers;
    }
}