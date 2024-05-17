@extends('template.projet')
@section('titre')
    @if ($userExists)
        Connectez-vous !
    @else
        Inscrivez-vous !
    @endif
@endsection
@section('content')
    @guest
        @section('titre1')
            @if ($userExists)
                Connectez-vous pour avoir access a votre espace utilisateur !
            @else
                Inscrivez-vous pour avoir access a notre base des donnes !
            @endif
        @endsection
        <h1 class="text-center">@yield('titre1')</h1>
        @if ($userExists)
            <form method="post" action="{{ route('login') }}" class="col-md-6 mx-auto">
                @csrf
                <div class="form-group">
                    <label for="email">Email - exemple : nom@example.com</label>
                    <input type="email" class="form-control" id="email" name="email" max="255" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required
                           minlength="8">
                </div>
                <button type="submit" class="btn btn-primary">Se loguer</button>
            </form>
                @else
                    <form method="post" action="{{ route('register') }}" class="col-md-6 mx-auto">
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
                            <input type="email" class="form-control" @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? session('email') }}" max="255" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" required
                                   minlength="8">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </form>
            @endif
        @endguest
    @auth
        Se déconnecter.
    @endauth
    @endsection
