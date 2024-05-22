@extends('template.projet')
@section('titre')
    Inscription reusie!
@endsection
@section('content')
<h1 class="text-center">{{ $success }}</h1>
<p>Vous êtes connecté et vous pouvez rechercher votre vélo adapté ci-dessous!</p>
<a href="{{ route('bikesearch') }}">Trouver un vélo.</a>
@endsection
