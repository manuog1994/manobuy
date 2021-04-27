<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $contacto = $request->except('_token');

        Mail::to('manuelortegagaliano@gmail.com')->send(new ContactReceived($contacto));

        return back()->with('sendContact', 'Tu petición de contacto ha sido enviada correctamente');
    }

}
