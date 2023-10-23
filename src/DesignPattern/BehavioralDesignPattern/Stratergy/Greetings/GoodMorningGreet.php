<?php

namespace App\DesignPattern\BehavioralDesignPattern\Stratergy\Greetings;

use App\DesignPattern\BehavioralDesignPattern\Stratergy\Interface\GreetMessageInterface;

class GoodMorningGreet implements GreetMessageInterface
{

    public function greet(): string
    {
       return 'Good Morning!';
    }
}