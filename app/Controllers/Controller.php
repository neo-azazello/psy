<?php

namespace App\Controllers;

class Controller
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

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

        $directory = $this->container->get('upload_directory');
        $filename = $this->moveUploadedFile($directory, $image_file, $image_name);

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
