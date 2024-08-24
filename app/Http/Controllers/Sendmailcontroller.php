<?php

namespace App\Http\Controllers;

use App\Mail\contato;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Http\Controllers\Mail;


class Sendmailcontroller extends Controller
{
    public function lead(Request $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;

        $data = [
            'name' => $name,
            'tel' => $tel,
            'email' => $email
        ];

        //Metodo de enviar o formulario
        Mail::to(users: 'sm.consultoriaemti@gmail.com')->send(new Sendmail($data));
        return redirect()->route('contato');
    }

    public function contato(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];

        //Metodo de enviar o formulario
        Mail::to(users: 'sm.consultoriaemti@gmail.com')->send(new contato($data));
        return redirect()->route('home');
    }
}
