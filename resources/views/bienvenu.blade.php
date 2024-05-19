@extends('template.projet')

@section('titre')
<title>Bienvenue </title>
@endsection
@section('nav')
    @include('navBar')
@endsection

@section('content')
    <div class="row">
        <!-- changements thomas -->
        <div class="col-12 text-center">
            <h1 id="bienvenue" class="text-danger-emphasis"> Bienvenue sur Bike My Ability</h1>
            <p class="fs-1 text-danger-emphasis"> Bike My Ability, roulez vers plus d'autonomie...  </p>
            <p class="fs-1 text-danger-emphasis"> Pédalez vers  plus de liberté! </p>

            <img src="{{ asset('pictures/accueil.jpg') }}"  class="img-fluid rounded" alt="">



        </div>
    </div>

    <h2 class="text-danger-emphasis"> A propos</h2>
    <p> Bike My Ability est né du constat que beaucoup de  personnes en situation de handicap peuvent se demander comment elles peuvent profiter du plaisir cyclable malgré leur condition. Certeines, ignorent même que  cela est possible.  Le but de  Bike My Ability est de montrer qu'il existe une solution cyclable adapté à tout un chacun.</p>

    <h2 class="text-danger-emphasis"> L'équipe  des Bikers </h2>
    <p> L'équipe  des Bikers, c'est nous.... Carmen, Christian, Anthony et Thomas.</p>
    <p>  Nous espèrons  que vous aurez une  expérience agréable sur BikeMyAbility.</p>
    <p> N'hésitez  pas à nous contacter, nous vous aiderons avec plaisir:</p>

    <p>   <a href="{{ route('contact') }}" aria-current="{{ request()->is('contact') ? 'page' : '' }}">Nous contacter</a> </p>

@endsection
@section('footer')
    @include('footer')
@endsection
