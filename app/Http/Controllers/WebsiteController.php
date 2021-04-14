<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ReportAnError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function contact(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->withSuccess('We will contact you soon.');
    }

    public function ReportError(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'report_error' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $report_error = new ReportAnError();
        $report_error->name = $request->name;
        $report_error->email = $request->email;
        $report_error->subject = $request->subject;
        $report_error->error_details = $request->report_error;

        $report_error->save();

        return redirect()->back()->withSuccess('Your Error has been report we will contact you soon about it.');
    }

}
