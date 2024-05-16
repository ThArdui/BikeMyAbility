@extends('template.projet')

@section('titre')
<title>Bienvenue </title>
@endsection
@section('nav')
    @include('navBar')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1 id="bienvenue">Bienvenue sur Bike My Ability</h1>
            <p>L' equipe des 'Bikers' ont le plaisir de vous presenter une solution pour aider
                toutes les personnes  atteintes d' un handicap à trouver un vélo adapté à
                leur situation. </p>
            <img src="{{ asset('pictures/fun2gobike.jpg') }}" alt="velo">
            <h2> L'équpe  des Bikers </h2>
            <p> Carmen, Christian, Anthony et Thomas espère que vous aurez une agréable expérience sur BikeMyAbility.</p>


        </div>
    </div>



@endsection
@section('footer')
    @include('footer')
@endsection
