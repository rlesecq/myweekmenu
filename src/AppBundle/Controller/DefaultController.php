<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AddAccountForm;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $createAccountForm = $this->createForm(AddAccountForm::class, null, ['action']);

        $createAccountForm->handleRequest($request);
        if ($createAccountForm->isSubmitted() && $createAccountForm->isValid()) {

        }
        return $this->render('@AppBundle/home.html.twig', [
            'create_account_form' => $createAccountForm->createView()
        ]);
    }
}
