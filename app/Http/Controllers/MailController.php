<?php

namespace GBA\Http\Controllers;
use Illuminate\Http\Request;
use GBA\Mail\PasswordResetMail;
class MailController extends Controller{
    
    public function sendPasswordResetEmail(){

    Mail::send(new sendMail());   
}
}