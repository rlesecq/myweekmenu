<?php

namespace AppBundle\Services;

use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;

class AccountService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createAccount($form)
    {
        $exist = $this->userRepository->checkMail($form['email']);
        if ($exist == 0) {
            $password = '';
            $user = new User();
            $user->setEmail($form['email'])
                 ->setPassword($password);

        }
    }
}
