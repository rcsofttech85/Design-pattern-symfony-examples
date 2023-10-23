<?php

namespace App\Controller;

use App\DesignPattern\BehavioralDesignPattern\Stratergy\Greetings\GoodEveningGreet;
use App\DesignPattern\BehavioralDesignPattern\Stratergy\GreetMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StrategyDesignPattern extends AbstractController
{


    #[Route(path: "/strategy", name: "strategy", methods: ["GET"])]
    public function greetMessage(GreetMessage $greetMessage): Response
    {
        $greetMessage->setGreetType(new GoodEveningGreet());

        $message = $greetMessage->greet();

        return new Response($message);
    }
}