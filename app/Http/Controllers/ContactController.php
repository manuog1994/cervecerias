<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactForm(Request $request){

        $contacto = ($request->except('_token'));
        Mail::to('info@manuelgaliano.info')->send(new ContactReceived($contacto));
        
        return back()->with('success', 'Tu solicitud de contacto ha sido enviada');
    }
}
