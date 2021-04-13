<?php

use App\Mailer;
use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(Mailer::send('woj@gaw', 'Hello!'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        
        Mailer::send('', '');
    }
}
