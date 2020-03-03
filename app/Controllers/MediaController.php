<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class MediaController extends Controller {

    public function getMedia(Request $request, Response $response)
    {

        $args['certs'] = $this->container->db->table('images')->where('pagetype', 'aboutme')->get();
        return $this->container->view->render($response, '/admin/pages/media.twig', $args);
    }
}