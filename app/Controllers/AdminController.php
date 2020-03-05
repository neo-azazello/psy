<?php

namespace App\Controllers;

use App\Models\Page;
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
            'footer_desc_ru' => $request->getParam('footer_desc_ru'),
            'footer_desc_az' => $request->getParam('footer_desc_az'),
            'work_address_ru' => $request->getParam('work_address_ru'),
            'work_address_az' => $request->getParam('work_address_az'),
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

    ///////////////////////////// SERVICES ////////////////////////////////////////////////////////
    public function getServices(Request $request, Response $response)
    {
        $args['services'] = Page::select('pageid', 'pagetitle_ru')->where('pagetype', 'service')->get();
        $args['slides'] = $this->container->db->table('slider')->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/service.twig', $args);
    }

    public function addNewService(Request $request, Response $response)
    {
        return $this->container->view->render($response, '/admin/pages/serviceadd.twig');
    }

    public function saveService(Request $request, Response $response)
    {
        $this->save($request);
        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.service'));
    }

    public function updateService(Request $request, Response $response, $id)
    {
        $args['service'] = Page::select()->where('pageid', $id['id'])->first();
        return $this->container->view->render($response, '/admin/pages/serviceupdate.twig', $args);
    }

    public function saveUpdatedService(Request $request, Response $response)
    {
        $this->update($request, ['pageid' => $request->getParam('pageid')]);
        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.service'));
    }

    public function deleteService(Request $request, Response $response, $args)
    {
        $getimage = Page::select('pageimage')->where(['pageid' => $args['id']])->first();
        unlink($this->dir . DIRECTORY_SEPARATOR . $getimage->pageimage);

        $db = Page::where(['pageid' => $args['id']])->delete();

        if ($db) {
            $this->flash->addMessage('error', 'deleted_successfully');
            return $response->withRedirect($this->router->pathFor("admin.service"));
        }
    }

    public function addToSlider(Request $request, Response $response)
    {
        $pageid = $request->getParam('pageid');
        $slide = $this->container->db->table('slider')->where('pageid', $pageid)->first();

        if ($slide) {
            $this->container->db->table('slider')->where('pageid', $pageid)->delete();
        } else {
            $this->container->db->table('slider')->insert(['pageid' => $pageid]);
        }

        return false;
    }

}
