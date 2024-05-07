<html>
<h1>Connectez vous ou creez un compte utilisateur</h1>
@if ($userExists)
    <form method="post" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input type="text" id="email" name="email" max="255" required>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required minlength="8">
        <input type="submit" value="Se connecter">
    </form>
@else

<form method="post" action="{{ route('register') }}">
    @csrf
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" max="255" required>
    <label for="firstname">Prenom</label>
    <input type="text" id="firstname" name="firstname" max="255" required>
    <label for="email">Email - example : nom@example.com</label>
    <input type="text" id="email" name="email" max="255" required>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required minlenght="8">
    <input type="submit" value="S'inscrire">
</form>
@endif
</html>
