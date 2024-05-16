<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $nom = $request->input('nom');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // Ensuite, vous pouvez envoyer le message par e-mail, l'enregistrer en base de données, etc.

        // Une fois le message traité, vous pouvez rediriger l'utilisateur vers une autre page
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
