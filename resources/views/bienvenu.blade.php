@extends('template.projet')
@section('titre')
<title>Bienvenue </title>
@endsection
@section('nav')
    @include('navBar')
@endsection

@section('content')
<h1 id="bienvenue">Bienvenue sur Bike My Ability</h1>
<p>Grace a bike my ability trouver votre vélos adapté. <br>

@endsection
@section('footer')
    @include('footer')
@endsection
