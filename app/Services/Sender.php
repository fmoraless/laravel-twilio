<?php

declare(strict_types=1);

namespace App\Services;

use Twilio\Rest\Client;

class Sender {
    /**
     * @var Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client(
            config('twilio.account'),
            config('twilio.token')
        );
    }

    public function send(string $recipient, string $message)
    {
        return $this->client->messages->create($recipient, [
            'from' => config('twilio.phone'),
            'body' => $message
        ]);
    }
}
