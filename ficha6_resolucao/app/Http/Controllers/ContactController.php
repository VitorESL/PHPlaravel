<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show() {
        return view('contact');
    }

    function store() {
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        $contact = new Contact();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->message = request()->message;
        $contact->save();

        return view('form')
            ->with('contact', $contact);
    }
}
