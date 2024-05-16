<nav id="nav" class="navbar navbar-expand-lg bg-primary mb-2" data-bs-theme="dark">
    <a class="visually-hidden-focusable" href="#content">Aller au contenu</a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link text-light" href="homepage.blade.php">Accueil</a></li>
                @guest
                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}"><a class="nav-link text-light" href="{{ route('login') }}">Se connecter</a></li>
                <li class="nav-item {{ request()->is('register') ? 'active' : '' }}"><a class="nav-link text-light" href="{{ route('register') }}">S'inscrire</a></li>
                    @endguest
                    <li class="nav-item"><a class="nav-link text-light" href="">Nous contacter</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="">B2B?</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="">Forum?</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="">Gallerie photo avec tous les models des velos</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('signout') }}">Se déconnecter</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
