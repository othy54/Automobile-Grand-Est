<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller

{


    public function sendMail(ContactRequest $request) {


        Mail::to('othman.bensaoula@gmail.com')->send(new ContactMail($request));

        return back()->with('message', 'Message envoyé !');

        
    }   
}
