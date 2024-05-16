@extends('template.projet')

@section('titre')
<title>Bienvenue </title>
@endsection
@section('nav')
    @include('navBar')
@endsection

@section('content')
<h1 id="bienvenue">Bienvenue sur Bike My Ability</h1>
<p>L' equipe des 'Bikers' ont le plaisir de vous presenter une solution pour aider
    toutes les personnes qui soit atteint d un handicap a trouve un velo adapte a
    leur type d'handicap . <br></p>
<img src="{{ asset('pictures/fun2gobike.jpg') }}" alt="velo">
<h2> createur du site </h2>
    <p>Thomas chef de groupe et createur de l idee de projet , et ses coequipier Carmen , Anthony et Christian .</p>

@endsection
@section('footer')
    @include('footer')
@endsection
