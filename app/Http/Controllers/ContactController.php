<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\contactMail;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.pages.contact');
    }
    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
             ]);

             $contact = new Contact;

             $contact->name = $request->name;
             $contact->email = $request->email;
             $contact->subject = $request->subject;
             $contact->phone = $request->phone;
             $contact->message = $request->message;
             $contact->save();
             
            
        Mail::send('emails.contactMail',[
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'phone' => $request->get('phone'), 
                'message' => $request->get('message') 
            ],function ($mail) use ($request) 
                {
                    $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
                    $mail->to('mrahman5037@gmail.com')
                    ->subject('Your Website Contact Form');
                 });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}
