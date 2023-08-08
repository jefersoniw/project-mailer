<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function sendRegisterMail()
    {
        $this->user->name = 'Jeferson Chagas Silva';
        $this->user->email = 'jeferson@email.com';
        $this->user->password = '123456';
        $this->user->save();

        //return new RegisterMail($this->user);
        Mail::to('jeferson_chagas25@hotmail.com', 'Jeferson Chagas')
            ->queue(new RegisterMail($this->user));
        // ->send(new RegisterMail($this->user));
    }
}
