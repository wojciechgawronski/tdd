<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReurnsTrue()
    {
        $user = new User('woj@gaw');

        $this->assertTrue($user->notify('hello!'));


    }
}