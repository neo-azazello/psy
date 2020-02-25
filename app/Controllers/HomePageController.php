<?php

namespace App\Controllers;

class HomePageController extends Controller
{

    public function index($request, $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/landing/index.twig', $args);
    }
}
