<?php

namespace App\Http\Controllers;

use App\Mail\FormContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(){
        $data=\request()->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required'
        ]);
        // Send Email
        Mail::to('test@test.com')->send(new FormContactMail($data));

        return redirect('contact')->with('message','Thanks for Your Message — We\'ll be in touch!');

    }
}
