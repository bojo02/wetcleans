<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactForm(Request $request){
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactForm($request->name, $request->phone, $request->email, $request->address, $request->msg));

        return redirect(route('contacts').'#success')->with('success', 'Съобщението беше изпратено успешно!');
    }
}
