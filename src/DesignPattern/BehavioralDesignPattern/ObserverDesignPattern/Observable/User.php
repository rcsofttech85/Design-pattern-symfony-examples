<?php

namespace App\DesignPattern\BehavioralDesignPattern\ObserverDesignPattern\Observable;

use SplObserver;

class User implements \SplSubject
{

    private array $observers = [];
    private string $name;
    private string $userId;
    public function __construct()
    {
    }

    public function attach(SplObserver $observer): void
    {
        $observerId = spl_object_hash($observer);
        $this->observers[$observerId] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $observerId = spl_object_hash($observer);
        unset($this->observers[$observerId]);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setName($name) {
        $this->name = $name;
        $this->notify();
    }

    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

}