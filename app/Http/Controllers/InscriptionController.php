<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class InscriptionController extends Controller
{
    public function showLoginForm()
    {
        $userExists = true; // Initialisez la variable
        return view('formulaireInscriptionConnexion', compact('userExists'));
    }

    public function showRegistrationForm()
    {
        $userExists = false;

        /*if ($this->checkUserExists(request())) {
            $userExists = true;
        }*/

        return view('formulaireInscriptionConnexion', compact('userExists'));
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('bikesearch')->with('success', 'Connection réussie !');
        } else {
            return back()->withErrors([
                'email' => 'Les informations d\'identification ne correspondent pas à nos enregistrements.',
            ]);
        }

        // Authentication failed, redirect back with error message
        return back()->withInput()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function signout(Request $request)
    {
        Auth::logout(); // Déconnexion de l'utilisateur

        // Effacez toutes les sessions en cours
        $request->session()->invalidate();

        // Redirigez l'utilisateur vers la page de connexion ou une autre page appropriée
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password'
        ], [
                'name.required' => 'Le nom est obligatoire',
                'password_confirmation.required' => 'Le mot de passe est obligatoire',
                'password_confirmation.same' => 'Les deux mots de passe doivent correspondre !',
                'email.unique' => 'cette adresse mail est déja utilisée',
                'firstname.required' => 'le prénom est obligatoire'
            ]
        );

        User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return view('auth.result')->with('success', 'Inscription réussie !');
        return redirect('/login')->with('success', 'Inscription réussie !');
    }

    public function checkUserExists(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->input('email');
        $userExists = User::where('email', $email)->exists();
        if ($userExists) {
            return redirect()->route('login')->withErrors(['email' => 'L\'adresse email est déjà utilisée.']);
        } else {
            return redirect()->route('register')->with('email', $email);
        }
    }
}
