<?php

namespace Opsigo\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookController {

    public function index() {
        
    }

    public function get(Application $app) {
        $books = $app['db']->fetchAll("SELECT b.id, b.title, b.author_id, b.publisher_id, b.genre_id, b.isbn, b.number_of_page, b.year, IF(b.status = 'IN', 'Tersedia', 'Tidak Tersedia') status, p.name publisher_name, g.name genre_name, a.name author_name FROM books b
            LEFT JOIN publishers p ON p.id = b.publisher_id
            LEFT JOIN authors a ON a.id = b.author_id
            LEFT JOIN genres g ON g.id = b.genre_id
            ORDER BY title ASC ");
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
        } else {
            $response = [
                'code' => 400,
                'message' => 'Terjadi kesalahan, silahkan coba beberapa saat lagi'
            ];
        }

        return new JsonResponse($response);
    }

    public function edit(Application $app) {
        $url = $app['request']->getRequestUri();
        $id = end(explode('/', $url));
        
        $data = $app['request']->request->all();
        
        unset($data['id']);
        
        $update = $app['db']->update('books', $data, array('id' => $id));
        
        if ($update) {
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

    public function delete(Application $app) {
        $url = $app['request']->getRequestUri();
        $id = end(explode('/', $url));

        $delete = $app['db']->delete('books', ['id' => $id]);

        if ($delete) {
            $response = [
                'code' => 200,
                'message' => 'Data berhasil di hapus'
            ];
        } else {
            $response = [
                'code' => 400,
                'message' => 'Terjadi kesalahan, silahkan coba beberapa saat lagi'
            ];
        }

        return new JsonResponse($response);
    }

}
