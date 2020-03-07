<?php

namespace App\Controllers;

use App\Models\Feedback;
use Slim\Http\Request;
use Slim\Http\Response;

class PageController extends Controller
{

    public function getHomePage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        $args['slides'] = $this->container->db
            ->table('slider')
            ->select('pages.pagetitle_az', 'pages.pagetitle_ru', 'pages.pageslug', 'pages.pageimage')
            ->join('pages', 'slider.pageid', '=', 'pages.pageid')
            ->get();
        $args['feedback'] = Feedback::select()->get();
        return $this->container->view->render($response, 'pages/homepage.twig', $args);
    }

    public function getAboutmePage(Request $request, Response $response)
    {
        $args['aboutme'] = $this->container->db->table('pages')->where('pagetype', 'aboutme')->first();
        $args['certs'] = $this->container->db->table('images')
            ->where('pagetype', 'aboutme')
            ->orderBy('imageorder', 'DESC')
            ->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/aboutme.twig', $args);
    }

    public function getServicesPage(Request $request, Response $response)
    {
        $args['posts'] = $this->container->db
            ->table('pages')
            ->where(['pagetype' => 'service', 'pagestatus' => 'published'])
            ->orderBy('pageid', 'DESC')
            ->get();

        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/services.twig', $args);
    }

    public function getOneService(Request $request, Response $response, $args)
    {
        $args['lang'] = $this->container->lang;
        $args['post'] = $this->container->db->table('pages')->where('pageslug', $args['slug'])->first();

        if (!$args['post']) {
            return $this->container->view->render($response->withStatus(404), '404.twig', $args);
        }

        return $this->container->view->render($response, 'pages/serviceone.twig', $args);
    }

    public function getPriceList(Request $request, Response $response)
    {
        $result = array();
        $data = json_decode(json_encode($this->container->db->table('pricelist')->select()->get()->toArray()), true);

        foreach ($data as $element) {
            $result[$element['group_ru']][] = $element;
        }

        $args['lang'] = $this->container->lang;
        $args['intro'] = $this->container->db->table('priceintro')->select()->first();
        $args['prices'] = $result;

        return $this->container->view->render($response, 'pages/serviceprice.twig', $args);
    }

    public function getMediaPage(Request $request, Response $response)
    {
        $args['videos'] = $this->container->db->table('videos')->orderBy('id', 'DESC')->get();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/media.twig', $args);
    }

    public function getContactPage(Request $request, Response $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, 'pages/contact.twig', $args);
    }

    public function postContact(Request $request, Response $response)
    {

        // $validation = $this->validator->validate($request, [
        //     'name' => v::notEmpty()->regex('/^[^<><|><\/>]+$/'),
        //     'email' => v::notEmpty()->email(),
        //     'subject' => v::notEmpty()->regex('/^[^<><|><\/>]+$/'),
        //     'comments' => v::notEmpty()->regex('/^[^<><|><\/>]+$/'),
        // ]);

        // if ($validation->failed()) {
        //     $this->flash->addMessage('error', 'PLease double check form and send it again');
        //     return $response->withRedirect($this->router->pathFor('contact'));
        // }

        $sendername = $request->getParam('name');
        $senderemail = $request->getParam('email');
        $sendersubject = $request->getParam('subject');
        $sendermessage = $request->getParam('comments');

        $to = 'help@psycholog.az'; //Who will receive email from Qala side
        $subject = $sendersubject; //Email subject shown
        $message = 'Имя отправителя: ' . $sendername . "\r\n" . 'Почта отправителя: ' . $senderemail . "\r\n" . "\r\n" . 'Сообщение: ' . "\r\n" . $sendermessage;

        $headers = 'From: help@psycholog.az' . "\r\n" .
        'Reply-To: help@psycholog.az' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        $status = mail($to, $subject, $message, $headers);
        $this->flash->addMessage('success', 'letter_send_successfully');
        return $response->withRedirect($this->router->pathFor('contact'));
    }
}
