@extends('template.projet')
@section('titre')
Gallerie des velos
    @endsection
@section('content')
<h1>Gallerie photo des velos</h1>
<p>Sur cette page vous avez la possibilitée de regarder les photos de tous les vélos enregistrés sur notre site.</p>
<p>Vous pouvez cliquer sur la photo du vélo que vous interesse pour decouvrir les details de ce vélo.</p>
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
    <div class="gallery">
@foreach($bikes as $bike)
            <div class="bike-item">
                @if($bike->Picture)
                    <a href="{{ route('details.velo', $bike->id) }}">
                        <img src="{{ asset('storage/' . $bike->Picture) }}" alt="{{ $bike->Bike_name }}">
                    </a
                    >                @else
                    <p>Pas d'image disponible</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection
