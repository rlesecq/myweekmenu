<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LoginForm;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request)
    {
        $loginForm = $this->createForm(LoginForm::class);
        return $this->render('@AppBundle/login.html.twig', [
            'login_form' => $loginForm->createView()
        ]);
    }
}
