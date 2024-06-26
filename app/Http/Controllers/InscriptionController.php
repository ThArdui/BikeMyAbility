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

        public function showRegistrationForm(Request $request)
    {
        $userExists = false;

        if ($request->has('email')) {
            $email = $request->input('email');
            $userExists = User::where('email', $email)->exists();
        }

        return view('formulaireInscriptionConnexion', compact('userExists'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:8'
        ], [
            'password.required' => 'Le mot de passe est obligatoire',
            'email.required' => 'Entrez une adresse email',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('bikesearch')->with('success', 'Connection réussie !');
        } else {
            return back()->withErrors([
                'login_error'=> 'Email ou mot de passe invalide.',

            ])->withInput();
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
            'email' => 'required|string|email|max:255|unique:_inscription,email',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password'
        ], [
                'name.required' => 'Le nom est obligatoire',
                'name.alpha_dash' => 'Uniquement que des lettres alphabétiques',
                'firstname.alpha_dash' => 'Uniquement que des lettres alphabétiques',
                'password.required' => 'Le mot de passe est obligatoire',
                'password_confirmation.required' => 'Le mot de passe est obligatoire',
                'password_confirmation.same' => 'Les deux mots de passe doivent correspondre !',
                'email.unique' => 'cette adresse mail est déja utilisée',
                'firstname.required' => 'le prénom est obligatoire'
            ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);

        return view('auth.result')->with('success', 'Inscription réussie !');
        //return redirect('/login')->with('success', 'Inscription réussie !');
    }

    public function checkUserExists(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);
    $email = $request->input('email');
    $userExists = User::where('email', $email)->exists();
    return response()->json(['exists' => $userExists]);

    }
}
