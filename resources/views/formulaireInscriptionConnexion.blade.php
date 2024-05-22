<!-- changements thomas -->
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
                Connectez-vous à votre espace utilisateur !
            @else
                Inscrivez-vous  sur Bike My Ability!
            @endif
        @endsection
        <h1 class="text-center text-danger-emphasis">@yield('titre1')</h1>
        @if ($userExists)
            <p> * Champs obligatoires</p>
            <form method="post" action="{{ route('login') }}" class="col-md-6 mx-auto">
                @csrf
                <div class="form-group">
                    <p>
                        <label for="email">Email <span aria-hidden="true">* </span> (ex : nom@example.com)</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" max="255" required>

                    </p>
                                 </div>
                <div class="form-group">
                    <p> <label for="password">Mot de passe <span aria-hidden="true">* </span> </label>
                        <input type="password" class="form-control" id="password" name="password" required
                               minlength="8"></p>

                </div>

                <p> <button type="submit" class="btn btn-primary">Se loguer</button> </p>
            </form>
            <div class="row">

                <div class="col-12 text-center">

                    <p>
                        <img src="{{ asset('pictures/jeuxparalympiques.jpg') }}"  class="img-fluid rounded" alt="">
                    </p>


                @else
            <p> * Champs obligatoires</p>
                    <form method="post" action="{{ route('register') }}" class="col-md-6 mx-auto">
                        @csrf
                        <div class="form-group">
                            <p>
                                <label for="name">Nom  <span aria-hidden="true">* </span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" max="255" required>
                            </p>

                        </div>
                        <div class="form-group">
                            <p>
                                <label for="firstname">Prénom <span aria-hidden="true">* </span></label>
                                <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" max="255" required>

                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label for="email">Email <span aria-hidden="true">* </span>(ex:nom@example.com)</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? session('email') }}" max="255" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                @enderror
                            </p>

                        </div>
                        <div class="form-group">
                            <p>
                                <label for="password">Mot de passe <span aria-hidden="true">* </span> </label>
                                <input type="password" class="form-control" id="password" name="password" required
                                       minlength="8">
                            </p>

                        </div>
                        <div class="form-group">
                            <p>
                                <label for="password_confirmation">Confirmer le mot de passe <span aria-hidden="true">* </span> </label>
                                <input type="password" class="form-control" id="password_confirmation"
                                       name="password_confirmation" required>


                            </p>
                                                    </div>
                        <p>
                            <button type="submit" class="btn btn-primary">S'inscrire</button>

                        </p>

                    </form>
            @endif
        @endguest
    @auth
        Se déconnecter.
    @endauth
    @endsection
