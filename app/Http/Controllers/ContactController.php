<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function create () {
            return view('contact.create');
    }

    public function store (Request $request) {

        $contact  = [];

        $contact['name'] = $request -> get('name');
        $contact['email'] =  $request -> get('email');
        $contact['msg']  = $request -> get('msg');

        //mail delivery logic

       // flash('Your message has been sent!')->success();

        return redirect()->route('contact.create');
    }
}
