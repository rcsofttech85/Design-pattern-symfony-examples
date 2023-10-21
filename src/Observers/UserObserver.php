<?php

namespace App\Observers;

use App\Observable\User;
use SplSubject;

class UserObserver implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        if (!$subject instanceof User) {
            return;
        }

        $userId = $this->generateRandomUserID();

        $subject->setUserId($userId);
    }

    private function generateRandomUserID(int $length = 8): string
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $userID = '';
        $charCount = strlen($characters);

        for ($i = 0; $i < $length; $i++) {
            $randomChar = $characters[random_int(0, $charCount - 1)];
            $userID .= $randomChar;
        }

        return $userID;
    }
}