<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    private $registerMail;

    public function __construct(RegisterMail $registerMail)
    {
        $this->registerMail = $registerMail;
    }

    public function sendRegisterMail()
    {
        Mail::to('jeferson_chagas25@hotmail.com', 'Jeferson Chagas')->send($this->registerMail);
    }
}
