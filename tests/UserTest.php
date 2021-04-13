<?php

use App\Mailer;
use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReurnsTrue()
    {
        $user = new User('woj@gaw');

        // mock will be better..
        $mailer = new Mailer;

        $user->setMailer($mailer); 

        $this->assertTrue($user->notify('hello!'));
    }
}
