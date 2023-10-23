<?php

namespace App\DesignPattern\BehavioralDesignPattern\Stratergy;

use App\DesignPattern\BehavioralDesignPattern\Stratergy\Interface\GreetMessageInterface;

final class GreetMessage
{

    private GreetMessageInterface|null $greetMessage =null;

    public function setGreetType(GreetMessageInterface $greetMessage): void
    {
        $this->greetMessage = $greetMessage;
    }

    public function greet(): string
    {
        if(!$this->greetMessage){
            throw new \Exception('greet message is not set');
        }

        return $this->greetMessage->greet();
    }
}