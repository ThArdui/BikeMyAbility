@extends('template.projet')
@section('titre')
    Resultat de votre recherche
@endsection
@section('content')
    <!-- resources/views/results-bike.blade.php -->
    @if(count($results) > 0)
        <h1>Résultats de la recherche</h1>
        @foreach($results as $bike)
            <div class="cadre-velo">
<li>{{ $bike->Bike_name }}</li>
                <a href="{{ route('details.velo', $bike->id) }}">
                    <img src="{{$bike->Picture}}" alt="Le velo {{$bike->Bike_name}}"></a>
                <p>{{$bike->Description}}</p>
                {{--
                 <a href="{{route('bike.detail',$bikes->id)}}">
                     <i class="fas fa-arrow-right"></i>
                 </a>
                 --}}
            </div>
        @endforeach
        </ul>
    @else
        <h1>Résultats de la recherche</h1>
        <p>Aucun vélo disponible. Veillez repeter la recherche avec d'autres critères.</p>
        <a href="{{route('bikesearch')}}">Rechercher un vélo adapté</a>
        <p>Ou regardez la gallerie photo avec tous les velos disponibles :</p>
        <a href="{{route('gallerie.velos')}}">Galerie photos </a>
    @endif
@endsection
