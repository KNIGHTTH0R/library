<?php 

namespace Opsigo\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenreController {
    
    public function get(Application $app){
        $genres = $app['db']->fetchAll('SELECT * FROM genres ORDER BY name ASC');
        $response = [
            'code' => 200,
            'data' => $genres
        ];
        
        return new JsonResponse($response);
    }
    
}
