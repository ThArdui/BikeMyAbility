<html>
<h1>Connectez vous ou creez un compte utilisateur</h1>
<form method="post" action="{{ route('register') }}">
    @csrf
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" max="255" required>
    <label for="firstname">Prenom</label>
    <input type="text" id="firstname" name="firstname" max="255">
    <label for="email">Email - example : nom@example.com</label>
    <input type="text" id="email" name="email" max="255" required>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required minlenght="8">
    <input type="submit" value="S'inscrire">

</form>
</html>
