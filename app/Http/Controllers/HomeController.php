<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function contactUs(Request $request){
        if ($request->isMethod('post')) {

            $data = $request->validate([
                'contact_name' => 'required|string|max:255',
                'contact_email' => 'required|email|max:255',
                'contact_message' => 'required|string',
            ]);

            $emailData = [
                'name' => $request->contact_name,
                'email' => $request->contact_email,
                'contactMsg' => $request->contact_message,
            ];

            if($request->contact_number)
                $emailData['phone'] = $request->contact_number;

            if($request->required_service)
                $emailData['service'] = $request->required_service;

            if($request->contact_subject)
                $emailData['subject'] = $request->contact_subject;


            Mail::send('emails.contact', $emailData, function ($message) {
                $message->to('ishaqkhan00023@gmail.com')->subject('New Contact Form Submission');
            });

            return response()->json(['status' => 'success', 'message' => 'Form submitted successfully!']);
        }

        return view('contact-us');

    }
}
