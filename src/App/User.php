<?php declare(strict_types=1);

namespace App;

use App\Mailer;

class User
{
    protected Mailer $mailer;

    public function __construct(
        public string $email
    ) {
    }

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notify(string $message)
    {
        // equivalent of hardcoded static metod below:
        // idea: we can pass the demendency on callable method..
        // btw: PHPUnit does not support testing static methods
        // but MockeryFramework supports..
        return call_user_func([Mailer::class, 'send'], $this->email, $message);
        
        return $this->mailer::send($this->email, $message);

    }
}
