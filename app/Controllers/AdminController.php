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

    public function getContactDetails(Request $request, Response $response)
    {
        $args['contact'] = $this->container->db->table('contacts')->first();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/contacts.twig', $args);
    }

    public function updateContactDetails(Request $request, Response $response)
    {
        $this->container->db->table('contacts')->update([
            'mobile' => $request->getParam('mobile'),
            'whatsapp' => $request->getParam('whatsapp'),
            'footer_desc' => $request->getParam('footer_desc'),
            'work_address' => $request->getParam('work_address'),
            'social_links' => $request->getParam('social_links'),
        ]);
        
        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.contacts'));
    }

    ///////////////////////////// ABOUT ME ////////////////////////////////////////////////////////
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
        $this->update($request, ['pagetype' => 'aboutme']);
        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.aboutme'));
    }

}
