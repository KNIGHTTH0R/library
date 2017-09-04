<?php

namespace Opsigo\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookController {

    public function index() {
        
    }

    public function get(Application $app) {
        $books = $app['db']->fetchAll("SELECT * FROM books ORDER BY title ASC");
        $response = [
            'code' => 200,
            'data' => $books
        ];

        return new JsonResponse($response);
    }

    public function add(Application $app) {
        $data = $app['request']->request->all();
        $insert = $app['db']->insert('books', $data);

        if ($insert) {
            $response = [
                'code' => 200,
                'message' => 'Data berhasil di simpan'
            ];
        }
        else{
            $response = [
                'code' => 400,
                'message' => 'Terjadi kesalahan, silahkan coba beberapa saat lagi'
            ];
        }
        
        return new JsonResponse($response);
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

}
