<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class AdminController extends Controller
{

    public function serviceImageUploader(Request $request, Response $response)
    {

        $image_file = $request->getUploadedFiles()['imagename'];
        $image_name = $request->getUploadedFiles()['imagename']->getClientFilename();
        $image_type = $request->getUploadedFiles()['imagename']->getClientMediaType();
        $image_size = $request->getUploadedFiles()['imagename']->getSize();

        $image_status = $this->imageProsessing($image_file, $image_name, $image_type, $image_size);

        if ($image_status == false) {
            return $response->withRedirect($this->router->pathFor('admin.' . $request->getParam('posttype')));
        }

        $data = array(
            'imagename' => $image_status,
            'imagedesc' => $request->getParam('imagedesc'),
            'pagetype' => $request->getParam('posttype'),
        );

        $result = $this->container->db->table('images')->insert($data);
        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.' . $request->getParam('posttype')));
    }

    public function getDashboard(Request $request, Response $response)
    {
        if (!$_SESSION['user']) {
            $this->flash->addMessage('error', 'please_auth_to_continue');
            return $response->withRedirect($this->router->pathFor('admin.login'));
        }

        return $this->container->view->render($response, '/admin/pages/dashboard.twig');

    }

    public function getAboutMe(Request $request, Response $response)
    {
        $args['aboutme'] = $this->container->db->table('pages')->where('pagetype', 'aboutme')->first();
        $args['certs'] = $this->container->db->table('images')->where('pagetype', 'aboutme')->get();
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

}
