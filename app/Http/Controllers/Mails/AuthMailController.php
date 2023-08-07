<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{

    public function __construct()
    {
    }

    public function sendRegisterMail()
    {
        return new RegisterMail([
            'name' => 'Jeferson Chagas Silva'
        ]);
        //Mail::to('jeferson_chagas25@hotmail.com', 'Jeferson Chagas')->send($this->registerMail);
    }
}
