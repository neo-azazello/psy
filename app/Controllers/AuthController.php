<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;

class AuthController extends Controller
{

    public function getSignIn($request, $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->view->render($response, 'admin/login.twig', $args);

    }

    public function postSignIn($request, $response)
    {
        // $validation = $this->validator->validate($request, [
        //     'username' => v::notEmpty()->email(),
        //     'userpassword' => v::notEmpty(),
        // ]);

        // if ($validation->failed()) {
        //     $this->flash->addMessage('error', 'Email and password could not be empty');
        //     return $response->withRedirect($this->router->pathFor('auth.signin'));
        // }

        $auth = $this->auth->attempt(
            $request->getParam('username'),
            $request->getParam('userpassword')
        );

        if (!$auth) {
            $this->flash->addMessage('error', 'invalid_creds');
            return $response->withRedirect($this->router->pathFor('admin.login'));
        }

        return $response->withRedirect($this->router->pathFor('dashboard'));
    }

    public function getSignOut($request, $response)
    {
        $this->auth->logout();
        $this->flash->addMessage('success', 'you_signed_out_successfully');
        return $response->withRedirect($this->router->pathFor('admin.login'));
    }

    public function getChangePassword($request, $response)
    {
        $args['lang'] = $this->container->lang;
        return $this->view->render($response, 'app/auth/passwordchange.twig', $args);
    }

    public function postChangePassword($request, $response)
    {

        $validation = $this->validator->validate($request, [
            'currentpassword' => v::notEmpty(),
            'userpassword' => v::notEmpty(),
        ]);

        if ($validation->failed()) {
            $this->flash->addMessage('error', 'err_required_field');
            return $response->withRedirect($this->router->pathFor('passwordupdate'));
        }

        $user = User::where('userid', $this->container->auth->user()->userid)->first();

        if (password_verify($request->getParam('currentpassword'), $user->userpassword)) {

            $new_pass = User::where('userid', $this->container->auth->user()->userid)->update([
                'userpassword' => password_hash($request->getParam('userpassword'), PASSWORD_DEFAULT, array('cost' => 12)),
            ]);

            if ($new_pass) {

                //Sending email after change password
                $args['lang'] = $this->container->lang;
                $args['name'] = $user->userfirstname;
                $args['userpassword'] = $request->getParam('userpassword');

                $recipent = $user->useremail;
                $sendername = 'Online CV';
                $subject = $this->container->lang['password_change_title'];
                $body = $this->container->view->fetch('app/emails/passwordchange.twig', $args);

                $this->container->EmailController->sendMail($recipent, $sendername, $subject, $body);

                $this->flash->addMessage('success', 'success_password_updated');
                return $response->withRedirect($this->router->pathFor('passwordupdate'));
            }

        } else {
            $this->flash->addMessage('error', 'err_your_current_password_incorrect');
            return $response->withRedirect($this->router->pathFor('passwordupdate'));
        }

    }

}
