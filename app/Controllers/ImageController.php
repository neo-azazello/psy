<?php

namespace App\Controllers;

use App\Models\Image;
use Slim\Http\Request;
use Slim\Http\Response;

class ImageController extends Controller
{
    protected $dir;

    public function __construct($container)
    {
        parent::__construct($container);
        $this->dir = $this->container->get('upload_directory');
    }
    ////////////////////////////////////// SERVICES /////////////////////////////////////////////////////

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

        $result = Image::create([
            'imagename' => $image_status,
            'imagedesc' => $request->getParam('imagedesc'),
            'pagetype' => $request->getParam('posttype'),
        ]
        );

        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor('admin.' . $request->getParam('posttype')));
    }

    public function serviceImageUpdateModal(Request $request, Response $response)
    {
        $args['posttype'] = $request->getParam('posttype');
        $args['imageid'] = $request->getParam('imageid');

        $args['image'] = Image::select('imagename', 'imagedesc', 'imageorder')
            ->where(['imageid' => $args['imageid'], 'pagetype' => $args['posttype']])
            ->first();

        return $this->container->view->render($response, 'admin/inc/modals/imageedit.twig', $args);

    }

    public function serviceImageUpdateModalUpdate(Request $request, Response $response)
    {

        $posttype = $request->getParam('posttype');
        $imageid = $request->getParam('imageid');
        $imageorder = $request->getParam('imageorder');
        $imagedesc = $request->getParam('imagedesc');

        if (!empty($request->getUploadedFiles()['imagename']->getClientFilename())) {

            $getimage = Image::select('imagename')->where(['imageid' => $imageid])->first();
            $unliked = unlink($this->dir . DIRECTORY_SEPARATOR . $getimage->imagename);

            $image_file = $request->getUploadedFiles()['imagename'];
            $image_name = $request->getUploadedFiles()['imagename']->getClientFilename();
            $image_type = $request->getUploadedFiles()['imagename']->getClientMediaType();
            $image_size = $request->getUploadedFiles()['imagename']->getSize();

            $image_status = $this->imageProsessing($image_file, $image_name, $image_type, $image_size);

            if ($image_status == false) {
                $this->flash->addMessage('info', 'nothing_updated');
                return $response->withRedirect($this->router->pathFor("admin." . $posttype));
            }
        } else {

            $getimage = Image::select('imagename')
                ->where(['imageid' => $imageid, 'pagetype' => $posttype])
                ->first();

            $image_status = $getimage->imagename;
        }

        $result = Image::where(['imageid' => $imageid, 'pagetype' => $posttype])->update([
            'imagename' => $image_status,
            'pagetype' => $posttype,
            'imageorder' => $imageorder,
            'imagedesc' => $imagedesc,
        ]);

        $this->flash->addMessage('success', 'Image has been updated successfully!');
        return $response->withRedirect($this->router->pathFor("admin." . $posttype));
    }

    public function imageDelete(Request $request, Response $response, $id)
    {
        $getimage = Image::select('imagename')->where(['imageid' => $id['id']])->first();
        $unliked = unlink($this->dir . DIRECTORY_SEPARATOR . $getimage->imagename);

        if (!$unliked) {
            $this->flash->addMessage('error', 'something_get_wrong!');
            return $response->withRedirect($this->router->pathFor("admin." . $id['posttype']));
        }

        $db = Image::where(['imageid' => $id['id'], 'pagetype' => $id['posttype']])->delete();

        if ($db) {
            $this->flash->addMessage('error', 'deleted_successfully!');
            return $response->withRedirect($this->router->pathFor("admin." . $id['posttype']));
        }

    }

    // TODO
    public function imageStatusChange(Request $request, Response $response)
    {
        return true;
    }

    /////////////////////////////////// HELPER METHODS ///////////////////////////////////////////////

    public function imageProsessing($image_file, $image_name, $image_type, $image_size)
    {

        if ($image_type !== "image/jpeg" && $image_type !== "image/png") {
            $this->flash->addMessage('error', 'Only JPG or PNG files are allowed!');
            return false;
        }

        if ($image_size > 1024000) {
            $this->flash->addMessage('error', 'Image size can not exceed 1Mb!');
            return false;
        }

        $filename = $this->moveUploadedFile($this->dir, $image_file, $image_name);

        return $filename;
    }

    private function moveUploadedFile($directory, $image_file, $image_name)
    {
        $extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8));
        $filename = sprintf('%s.%0.8s', $basename, $extension);

        $image_file->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

        return $filename;
    }
}
