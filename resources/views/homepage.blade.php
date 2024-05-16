@extends('template.projet')

@section('titre', 'Accueil - BikemyAbility')
@section('navbar')
    @include('navBar')
@endsection

@section('content')
@include('bienvenu')
@endsection
@section('footer')
    @include('footer')
@endsection

