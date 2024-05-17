@extends('template.projet')
@section('titre')
@endsection
@section('content')
@if ($userExists)
<h1>Connectez vous!</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Se connecter">
</form>
@else
<h1>Inscrivez vous</h1>
<form method="post" action="{{ route('register') }}">
    @csrf
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <label for="firstname">Prénom</label>
    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>

    <label for="email">Adresse e-mail</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? session('email') }}" max="255" required>
    @error('email')
    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" minlength="8" required>

    <label for="password_confirmation">Confirmer le mot de passe</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>

    <input type="submit" value="S'inscrire">
</form>
@endif
@endsection
