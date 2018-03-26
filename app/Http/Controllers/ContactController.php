<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function faq()
    {
        return view('contact.faq');
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['msg'] = $request->get('msg');

        // Mail delivery logic goes here
        Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));

        flash('Your message has been sent!')->success();

        return redirect()->route('contact.create');

    }
}
