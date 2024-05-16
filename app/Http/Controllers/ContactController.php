<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $nom = $request->input('nom');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:20|max:2500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // Ensuite, vous pouvez envoyer le message par e-mail, l'enregistrer en base de données, etc.

        // Une fois le message traité, vous pouvez rediriger l'utilisateur vers une autre page
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
