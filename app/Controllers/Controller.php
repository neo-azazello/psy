<?php

namespace App\Controllers;

use App\Models\Page;
use Slim\Http\Request;

class Controller
{

    protected $container;
    protected $dir;

    public function __construct($container)
    {
        $this->container = $container;
        $this->dir = $this->container->get('upload_directory');
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    public function save(Request $request)
    {
        return Page::create([
            'pagetype' => $request->getParam('pagetype'),
            'pagetitle_ru' => $request->getParam('pagetitle_ru'),
            'pagetitle_az' => $request->getParam('pagetitle_az'),
            'shorttext_ru' => $request->getParam('shorttext_ru'),
            'shorttext_az' => $request->getParam('shorttext_az'),
            'text_ru' => $request->getParam('text_ru'),
            'text_az' => $request->getParam('text_az'),
            'pageimage' => $request->getParam('pageimage'),
            'pagestatus' => 'published',
        ]);
    }

    public function update(Request $request, array $where)
    {
        $getimage = Page::select('pageimage')->where($where)->first();

        if (!empty($request->getUploadedFiles()['pageimage']->getClientFilename())) {

            unlink($this->dir . DIRECTORY_SEPARATOR . $getimage->pageimage);

            $image_file = $request->getUploadedFiles()['pageimage'];
            $image_name = $request->getUploadedFiles()['pageimage']->getClientFilename();
            $image_type = $request->getUploadedFiles()['pageimage']->getClientMediaType();
            $image_size = $request->getUploadedFiles()['pageimage']->getSize();

            $image_status = $this->container->ImageController
                ->imageProsessing($image_file, $image_name, $image_type, $image_size);

            if ($image_status == false) {
                return false;
            }

        } else {

            $image_status = $getimage->pageimage;
        }

        return Page::where($where)->update([
            'pagetitle_ru' => $request->getParam('pagetitle_ru'),
            'pagetitle_az' => $request->getParam('pagetitle_az'),
            'shorttext_ru' => $request->getParam('shorttext_ru'),
            'shorttext_az' => $request->getParam('shorttext_az'),
            'text_ru' => $request->getParam('text_ru'),
            'text_az' => $request->getParam('text_az'),
            'pageimage' => $image_status,
        ]);
    }
}
