<?php declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class Mailer
{
    /**
     * Send a message
     */
    public static function send(string $email, string $message) : bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        echo "Send $message to $email";

        return true;
    }
}
