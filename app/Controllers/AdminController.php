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

    public function serviceImageUpdateModal(Request $request, Response $response)
    {
        $posttype = $request->getParam('posttype');
        $imageid = $request->getParam('imageid');

        $args['image'] = $this->container->db->table('images')->where(array(
            'imageid' => $imageid,
            'pagetype' => $posttype,
        ))->first();

        return $this->container->view->render($response, 'admin/inc/modals/imageedit.twig', $args);

    }

    public function serviceImageUpdateModalUpdate(Request $request, Response $response)
    {

        $posttype = $request->getParam('posttype');
        $imageid = $request->getParam('imageid');
        $imageorder = $request->getParam('imageorder');

        //var_dump($request->getUploadedFiles()['imagename']->getClientFilename());die();

        if (!empty($request->getUploadedFiles()['imagename']->getClientFilename())) {

            $image_file = $request->getUploadedFiles()['imagename'];
            $image_name = $request->getUploadedFiles()['imagename']->getClientFilename();
            $image_type = $request->getUploadedFiles()['imagename']->getClientMediaType();
            $image_size = $request->getUploadedFiles()['imagename']->getSize();

            $image_status = $this->container->post->imageProsessing($image_file, $image_name, $image_type, $image_size);

            if ($image_status == false) {
                return $response->withRedirect($this->router->pathFor($posttype));
            }
        } else {

            $getimage = $this->container->db->table('images')->where(array(
                'posttype' => $posttype,
                'imageid' => $imageid,
            ))->first();

            $image_status = $getimage->imagename;
        }

        $data = array(
            'imagename' => $image_status,
            'posttype' => $posttype,
            'imageorder' => $imageorder,
        );

        $result = $this->container->db->table('images')->where(array(
            'posttype' => $posttype,
            'imageid' => $imageid,
        ))->update($data);

        $this->flash->addMessage('success', 'Image has been updated successfully!');
        return $response->withRedirect($this->router->pathFor($posttype));
    }




    public function getDashboard(Request $request, Response $response)
    {
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

    public function getMedia(Request $request, Response $response){
        $args['certs'] = $this->container->db->table('images')->where('pagetype', 'aboutme')->get();
        return $this->container->view->render($response, '/admin/pages/media.twig', $args);
    }

}
