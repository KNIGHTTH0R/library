<?php 

namespace Opsigo\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthorController {
    
    public function get(Application $app){
        $authors = $app['db']->fetchAll('SELECT * FROM authors ORDER BY name ASC');
        $response = [
            'code' => 200,
            'data' => $authors
        ];
        
        return new JsonResponse($response);
    }
    
}
