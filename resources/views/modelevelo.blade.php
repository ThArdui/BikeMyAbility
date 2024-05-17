@extends('template.projet')
@section('titre')
    Modèle de vélo {{ $bike->Bike_name }}
@endsection
    @section('content')
        <h1>Le vélo {{ $bike->Bike_name }}</h1>

        <p>Description : {{ $bike->Description }}</p>
        <!-- Ajoutez ici les autres détails du vélo que vous souhaitez afficher -->
@endsection
