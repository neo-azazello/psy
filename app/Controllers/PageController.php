<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class PageController extends Controller
{

    public function getHomePage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/homepage.twig', $args);
    }

    public function getAboutmePage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/aboutme.twig', $args);
    }

    public function getServicesPage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/services.twig', $args);
    }

    public function getMediaPage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/media.twig', $args);
    }

    public function getContactPage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/contact.twig', $args);
    }
}
