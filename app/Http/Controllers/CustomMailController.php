<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;
use App\Http\Requests\CustomRequest;

class CustomMailController extends Controller
{
    public function sendMail(CustomRequest $request) {


        Mail::to('othman.bensaoula@gmail.com')->send(new CustomMail($request));

        return back()->with('message2', 'Message envoyé !');

        
    }  
}
