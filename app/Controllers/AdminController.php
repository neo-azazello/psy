<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class AdminController extends Controller
{

    public function getDashboard(Request $request, Response $response)
    {
        return $this->container->view->render($response, '/admin/pages/dashboard.twig');
    }

    public function getAboutMe(Request $request, Response $response)
    {
        $args['aboutme'] = $this->container->db->table('pages')->where('pagetype', 'aboutme')->first();
        $args['certs'] = $this->container->db->table('images')
            ->where('pagetype', 'aboutme')
            ->orderBy('imageorder', 'ASC')
            ->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/aboutme.twig', $args);
    }
    public function saveAboutMe(Request $request, Response $response)
    {
        $array = [
            'pagetitle_ru' => $request->getParam('pagetitle_ru'),
            'shorttext_ru' => $request->getParam('shorttext_ru'),
            'text_ru' => $request->getParam('text_ru'),
            'pagetitle_az' => $request->getParam('pagetitle_az'),
            'shorttext_az' => $request->getParam('shorttext_az'),
            'text_az' => $request->getParam('text_az'),
        ];

        $result = $this->container->db->table('pages')
            ->where('pagetype', 'aboutme')
            ->update($array);

        if ($result) {
            $this->flash->addMessage('success', 'updated_successfully');
            return $response->withRedirect($this->router->pathFor('admin.aboutme'));
        } else {
            $this->flash->addMessage('info', 'nothing_updated');
            return $response->withRedirect($this->router->pathFor('admin.aboutme'));
        }

    }

    public function getMedia(Request $request, Response $response)
    {

        $args['certs'] = $this->container->db->table('images')->where('pagetype', 'aboutme')->get();
        return $this->container->view->render($response, '/admin/pages/media.twig', $args);
    }

}
