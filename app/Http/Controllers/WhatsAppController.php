<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    //
    public function create()
    {
        return view('whatsapp');
    }

    public function generateLink(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        $phone_number = $request->phone_number;
        $message = $request->message;

        // Remove todos os caracteres que não sejam números
        $phone_number = preg_replace('/\D/', '', $phone_number);

        $whatsapp_url = 'https://wa.me/' . $phone_number . '?text=' . urlencode($message);

        return view('whatsapp', ['whatsapp_url' => $whatsapp_url]);
    }
}
