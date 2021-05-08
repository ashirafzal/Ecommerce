<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->message = request('message');

        $contact->save();

        return response()->json(null, 200);
    }
}
