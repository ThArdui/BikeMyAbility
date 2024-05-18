@extends('template.projet')
@section('titre')
    Resultat de votre recherche
@endsection
@section('content')

    resources/views/results-bike.blade.php -->
    @if (count($results) > 0)
        Résultats de la recherche

        @foreach ($results as $bike)
            {{ $bike->Bike_name }}

            Affichez d'autres attributs du vélo -->
        @endforeach

        @foreach($results as $bike)

            class="cadre-velo">

            src="{{$bike->Picture}}" alt="{{$bike->Bike_name}}">
            {{$bike->Description}}
            {{--

href="{{route('bike.detail',$bikes->id)}}">

class="fas fa-arrow-right">

--}}

        @endforeach
    @else
        Aucun vélo disponible.
    @endif
@endsection
