<?php

namespace App\Controllers;

use App\Models\Feedback;
use Slim\Http\Request;
use Slim\Http\Response;

class FeedbackController extends Controller
{
    public function getFeedback(Request $request, Response $response)
    {

        $args['feedback'] = Feedback::select()->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/feedback.twig', $args);
    }

    public function addNewFeedback(Request $request, Response $response)
    {
        return $this->container->view->render($response, '/admin/pages/feedbackadd.twig');
    }

    public function saveFeedback(Request $request, Response $response)
    {

        $feedbacktext = $request->getParam('feedbacktext');
        $feedbackauthor = $request->getParam('feedbackauthor');
        $authortitle = $request->getParam('authortitle');

        Feedback::create([
            'feedbacktext' => $feedbacktext,
            'authortitle' => $authortitle,
            'feedbackauthor' => $feedbackauthor,
        ]);

        $this->flash->addMessage('success', 'created_successfully');
        return $response->withRedirect($this->router->pathFor("admin.feedback"));
    }

    public function updateFeedback(Request $request, Response $response, $id)
    {
        $args['feedback'] = Feedback::select()->where('feedbackid', $id['id'])->first();
        return $this->container->view->render($response, '/admin/pages/feedbackupdate.twig', $args);
    }

    public function saveUpdatedFeedback(Request $request, Response $response)
    {
        $feedbacktext = $request->getParam('feedbacktext');
        $feedbackauthor = $request->getParam('feedbackauthor');
        $authortitle = $request->getParam('authortitle');

        Feedback::where('feedbackid', $request->getParam('feedbackid'))
            ->update([
                'feedbacktext' => $feedbacktext,
                'authortitle' => $authortitle,
                'feedbackauthor' => $feedbackauthor,
            ]);

        $this->flash->addMessage('success', 'updated_successfully');
        return $response->withRedirect($this->router->pathFor("admin.feedback"));
    }

    public function deleteFeedback(Request $request, Response $response, $args)
    {
        $db = Feedback::where(['feedbackid' => $args['id']])->delete();

        if ($db) {
            $this->flash->addMessage('error', 'deleted_successfully');
            return $response->withRedirect($this->router->pathFor("admin.feedback"));
        }
    }
}
