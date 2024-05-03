<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InscriptionController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/bikesearch')->with('success', 'Inscription réussie !');
    }
}

