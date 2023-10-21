<?php

namespace App\Controller;

use App\Observable\User;
use App\Observers\UserObserver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObserverDesignPattern extends AbstractController
{

    #[Route(path: "/observerDesignPattern", name: 'observerDesignPattern', methods: ['GET'])]
    public function welcomeUser(): Response
    {
        $newUser = new User();

        $newUserObserver = new UserObserver();
        $newUser->attach($newUserObserver);

        $newUser->setName('rahul');

            $newUser->detach($newUserObserver); // It won't notify further updates..


        return new Response("Welcome {$newUser->getName()}!, your user id is {$newUser->getUserId()}");
    }
}