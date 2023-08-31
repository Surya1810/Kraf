<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'hi@madebykraf.com',
                // 'cc' => 'suryadinarta8@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => 'Contact Us Message for Kraf.',
                'body' => $request->message
            ];

            Mail::to('hi@madebykraf.com')->send(new ContactMail($mail_data));
            return redirect::to(URL::previous() . "#contact")->with('success', "Thank you for contacting us, we'll reply immediatly");
        } else {
            return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        }
    }

    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
