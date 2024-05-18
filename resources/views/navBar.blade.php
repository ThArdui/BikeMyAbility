<nav id="nav" class="navbar navbar-expand-lg bg-warning mb-2 text-light" data-bs-theme="dark">
    <a class="navbar-brand text-danger" href="{{ url('/') }}">BIKE MY ABILITY</a>
    <a class="visually-hidden-focusable" tabindex="-1" href="#content">Aller au contenu</a>

    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link text-danger  {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/homepage') }}" aria-current="page">Accueil</a>
            </li>
            @guest
                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                    <a class="nav-link text-danger" href="{{ route('login') }}">Se connecter</a>
                </li>
                <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                    <a class="nav-link text-danger" href="{{ route('register') }}">S'inscrire</a>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('contact') }}" aria-current="{{ request()->is('contact') ? 'page' : '' }}">Nous contacter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('gallerie.velos') }}" aria-current="{{ request()->is('gallerie.velos') ? 'page' : '' }}">Gallerie photo avec tous les modèles des vélos</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('biketodbform') }}" aria-current="{{ request()->is('biketodbform') ? 'page' : '' }}">Ajoutez un vélo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('bikesearch') }}" aria-current="{{ request()->is('bikesearch') ? 'page' : '' }}">Rechercher un vélo adapté</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('signout') }}">Se déconnecter</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>


<!-- <nav id="nav" class="navbar navbar-expand-lg bg-dark mb-2 text-light container-fluid" data-bs-theme="dark">
<a class="navbar-brand text-danger" href="{{ url('/') }}">BIKE MY ABILITY</a>
    <a class="visually-hidden-focusable"  tabindex="-1" href="#content">Aller au contenu</a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link text-danger {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/homepage') }}" aria-current="{{ request()->is('/') ? 'page' : '' }}">Accueil</a></li>
                @guest
                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}"><a class="nav-link text-danger" href="{{ route('login') }}" aria-current="{{ request()->is('login') ? 'page' : '' }}">Se connecter</a></li>
                <li class="nav-item {{ request()->is('register') ? 'active' : '' }}"><a class="nav-link text-danger" href="{{ route('register') }}" aria-current="{{ request()->is('register') ? 'page' : '' }}">S'inscrire</a></li>
                    @endguest
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('contact') }}" aria-current="{{ request()->is('contact') ? 'page' : '' }}">Nous contacter</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="{{ route('gallerie.velos') }}" aria-current="{{ request()->is('gallerie.velos') ? 'page' : '' }}">Gallerie photo avec tous les models des velos</a></li>
                @auth
                <li class="nav-item"><a class="nav-link text-danger" href="{{ route('biketodbform') }}" aria-current="{{ request()->is('biketodbform') ? 'page' : '' }}">Ajoutez un velo</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('bikesearch') }}" aria-current="{{ request()->is('bikesearch') ? 'page' : '' }}">Rechercher un velo adapté</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('signout') }}">Se déconnecter</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav> -->

