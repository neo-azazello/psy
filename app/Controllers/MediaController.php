<?php

namespace App\Controllers;

use App\Models\Media;
use Slim\Http\Request;
use Slim\Http\Response;

class MediaController extends Controller
{

    public function getMedia(Request $request, Response $response)
    {

        $args['media'] = Media::select()->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/media.twig', $args);
    }

    public function addNewMedia(Request $request, Response $response)
    {
        return $this->container->view->render($response, '/admin/pages/mediaadd.twig');
    }

    public function saveMedia(Request $request, Response $response)
    {

        $videoname = $request->getParam('videoname');
        $duartion = $this->parseDateFormat($request->getParam('duration'));
        $videoid = $this->getYouTubeId($request->getParam('videoid'));

        Media::create([
            'videoname' => $videoname,
            'videoid' => $videoid,
            'duration' => $duartion,
        ]);

        $this->flash->addMessage('success', 'created_successfully');
        return $response->withRedirect($this->router->pathFor("admin.media"));
    }

    public function updateMedia(Request $request, Response $response, $id)
    {
        $args['media'] = Media::select()->where('id', $id['id'])->first();
        return $this->container->view->render($response, '/admin/pages/mediaupdate.twig', $args);
    }

    public function saveUpdatedMedia(Request $request, Response $response)
    {
        $videoname = $request->getParam('videoname');
        $duartion = $this->parseDateFormat($request->getParam('duration'));
        $videoid = $this->getYouTubeId($request->getParam('videoid'));

        Media::where('id', $request->getParam('id'))
            ->update([
                'videoname' => $videoname,
                'videoid' => $videoid,
                'duration' => $duartion,
            ]);

        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor("admin.media"));
    }

    public function deleteMedia(Request $request, Response $response, $args)
    {
        $db = Media::where(['id' => $args['id']])->delete();

        if ($db) {
            $this->flash->addMessage('error', 'deleted_successfully');
            return $response->withRedirect($this->router->pathFor("admin.media"));
        }
    }

    private function getYouTubeId(string $videourl)
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videourl, $match);
        return $youtube_id = $match[1];
    }

    private function parseDateFormat($duartion)
    {
        if ($duartion < 3599) {
            return gmdate("i:s", $duartion);
        } else {
            return gmdate("H:i:s", $duartion);
        }
    }
}
