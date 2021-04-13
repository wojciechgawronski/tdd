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
        return $this->mailer::send($this->email, $message);
    }
}
