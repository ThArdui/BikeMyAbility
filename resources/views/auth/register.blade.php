<html>
<h1>Connectez-vous ou créez un compte utilisateur</h1>
<form method="post" action="{{ route('inscription') }}">
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
</html>
