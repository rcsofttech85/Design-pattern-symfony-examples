<?php

namespace App\DesignPattern\BehavioralDesignPattern\Stratergy\Greetings;

use App\DesignPattern\BehavioralDesignPattern\Stratergy\Interface\GreetMessageInterface;

class GoodEveningGreet implements GreetMessageInterface
{

    public function greet(): string
    {
        return 'Good Evening!';
    }
}