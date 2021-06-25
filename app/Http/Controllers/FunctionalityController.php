<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ReportAnError;
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

    public function ReportError(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'error' => 'required',
        ]);

        $report_error = new ReportAnError();
        $report_error->name = request('name');
        $report_error->email = request('email');
        $report_error->subject = request('subject');
        $report_error->error_details = request('error');

        $report_error->save();

        return response()->json(null, 200);
    }
}
