<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function contact () {
        return view('contact');
    }

    public function contact_submit (Request $Request) {
        $name = $Request->input('name');
        $email = $Request->email;
        $user_message = $Request->message;

        try {

            Mail::to($email)->send(new ContactMail($name, $email, $user_message));
    
        } catch(Exception $error){
            return redirect()->back('emailError', 'Problema, Riprova a inviare il tuo messaggio');
            
        }
        return redirect(route('homepage'))->with('emaiSent', 'abbiamo ricevuto la tue email, ti ricontatteremo presto');

    }
}
