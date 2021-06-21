<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    function contact() {
        $contacts = Contact::all();
        return view("contact")
            ->with("contacts", $contacts);
    }

    function submit() {
        request()->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "assunto" => ["required"],
            "message" => ["required"],
        ]);

        $contact = new Contact();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->assunto = request()->assunto;
        $contact->message = request()->message;
        $contact->save();

        return view("submitted")
            ->with("name", request()->name)
            ->with("email", request()->email)
            ->with("assunto", request()->assunto)
            ->with("message", request()->message);
    }

    function newsletter() {

        return view("newsletter");
    }
}
