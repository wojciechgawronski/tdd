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

        // $mailer = $this->createMock(Mailer::class);
        // $mailer->expects($this->once())
        //         ->method('send')
        //         ->willReturn(true);

        // because of static methid previus test do not pass..

        // $user->setMailer($mailer); 

        $this->assertTrue($user->notify('hello!'));
    }
}
