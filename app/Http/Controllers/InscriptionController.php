<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class InscriptionController extends Controller
{
 /*   public function showLoginForm()
    {
        $userExists = false;

        return view('auth.login', compact('userExists'));
    }
*/
    public function showRegistrationForm()
    {
        $userExists = false;

        if ($this->checkUserExists(request())) {
            $userExists = true;
        }

        return view('auth.register', compact('userExists'));
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/bikesearch')->with('success', 'Connection réussie !');
        }

        // Authentication failed, redirect back with error message
        return back()->withInput()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password'
        ],[
                'name.required' => 'Le nom est obligatoire',
                'password_confirmation.required'=> 'Le mot de passe est obligatoire',
                'password_confirmation.same' => 'Les deux mots de passe doivent correspondre !',
                'email.unique'=>'cette adresse mail est déja utilisée'
            ]
        );

        User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return view('auth.result')->with('success', 'Inscription réussie !');
        return redirect('/bikesearch')->with('success', 'Inscription réussie !');
    }

public function checkUserExists(Request $request)
{
    $email = $request->input('email');

    $userExists = User::where('email', $email)->exists();

    if ($userExists) {
        return redirect()->route('login')->with('userExists', true);
    } else {
        return redirect()->route('register')->with('userExists', false);
    }
}
}
