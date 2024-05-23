<nav id="nav" class="navbar navbar-expand-lg bg-warning mb-2 text-light" data-bs-theme="dark">
    <a class="navbar-brand text-dark ms-5" href="{{ url('/') }}">BIKE MY ABILITY</a>

    <button class="navbar-toggler bg-warning " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon  "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
                <a class="nav-link text-dark {{request()->routeIs('home')? 'active': ''}}" href="{{route('home')}}" aria-current="{{request()->routeIs('home')?'page':''}}"> Accueil </a>

            </li>

            <li class="nav-item">
                <a class="nav-link text-dark {{request()->routeIs('gallerie.velos')?'active':''}}" href="{{route('gallerie.velos')}}" aria-current="{{request()->routeIs('gallerie.velos')?'page':''}}">Galerie photos </a>


            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{request()->routeIs('contact_form')?'active':''}}" href="{{route('contact_form')}}" aria-current="{{request()->routeIs('contact_form')?'page':''}}"> Nous contacter</a>
            </li>

            @guest

                <li class="nav-item">
                    <a class="nav-link text-dark {{request()->routeIs('login')?'active':''}}" href="{{route('login')}}" aria-current="{{request()->routeIs('login')?'page':''}}"> Se connecter</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark {{request()->routeIs('register')?'active':''}}" href="{{route('register')}}" aria-current="{{request()->routeIs('register')?'page':''}}"> S'inscrire</a>
                </li>


            @endguest



            @auth

                <li class="nav-item">
                    <a class="nav-link text-dark {{request()->routeIs('biketodbform')?'active':''}}" href="{{route('biketodbform')}}" aria-current="{{request()->routeIs('biketodbform')?'page':''}}"> Ajoutez un vélo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{request()->routeIs('bikesearch')?'active':''}}" href="{{route('bikesearch')}}" aria-current="{{request()->routeIs('bikesearch')?'page':''}}"> Rechercher un vélo adapté
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('signout') }}">Se déconnecter</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
