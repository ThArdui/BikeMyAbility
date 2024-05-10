<html lang="en">
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
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" minlength="8" required>

    <label for="password_confirmation">Confirmer le mot de passe</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>

    <input type="submit" value="S'inscrire">
</form>
@endif
</html>
