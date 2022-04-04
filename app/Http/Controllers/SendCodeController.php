<?php

namespace App\Http\Controllers;

use App\Services\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SendCodeController extends Controller
{
    /** @var Sender */
    private $sender;

    public function __construct(Sender $sender)
    {
        $this->sender = $sender;
    }

    public function send()
    {
        $message = 'Click en follow link: '. route('recibe.sms', ['code' => Str::random(8)]);
        try {
            $response = $this->sender->send('+56982166481', $message);
            dd($response);
        }catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
