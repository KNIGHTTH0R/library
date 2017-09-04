<?php 

namespace Opsigo\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class PublisherController {
    
    public function get(Application $app){
        $publishers = $app['db']->fetchAll('SELECT * FROM publishers ORDER BY name ASC');
        $response = [
            'code' => 200,
            'data' => $publishers
        ];
        
        return new JsonResponse($response);
    }
    
}
