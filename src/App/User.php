<?php declare(strict_types=1);

namespace App;

use App\Mailer;

class User
{
    public function __construct(
        public string $email
    )
    {
    }

    public function notify(string $message)
    {
        return Mailer::send($this->email, $message);
    }
}
