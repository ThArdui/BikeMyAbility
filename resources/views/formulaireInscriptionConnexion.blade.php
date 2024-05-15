<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre</title>
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    @if ($userExists)
        <h1 class="text-center">Connectez-vous</h1>
        <form method="post" action="{{ route('login') }}" class="col-md-6 mx-auto">
            @else
                <h1 class="text-center">Inscrivez-vous</h1>
                <form method="post" action="{{ route('register') }}" class="col-md-6 mx-auto">
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" max="255" required>
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" max="255" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email - exemple : nom@example.com</label>
                        <input type="email" class="form-control" id="email" name="email" max="255" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
</div>

<!-- Inclure Bootstrap JS (facultatif si vous n'utilisez pas de fonctionnalités JS de Bootstrap) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
