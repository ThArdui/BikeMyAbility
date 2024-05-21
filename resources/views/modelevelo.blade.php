@extends('template.projet')
@section('titre')
    Modèle de vélo {{ $bike->Bike_name }}
@endsection
    @section('content')
        <h1>Le vélo {{ $bike->Bike_name }}</h1>

        <p>Description : {{ trim($bike->Description) }}</p>
        <p>Avantages : {{ trim($bike->Pros) }}</p>
        <p>Inconvénients : {{ trim($bike->Cons) }}</p>
        <p>Poids : {{ trim($bike->Weight) }} kg</p>
        <p>Assistance électrique : {{ trim($bike->Electrical_assistance ? 'Oui' : 'Non') }}</p>
        <p>Pliable : {{ trim($bike->Foldable ? 'Oui' : 'Non') }}</p>
        <p>Nombre de vitesses : {{ trim($bike->Speeds_number) }}</p>
        <p>Type de freins : {{ trim($bike->Brakes_type) }}</p>
        <p>Hauteur du cadre : {{ trim($bike->Frame_height) }} cm</p>
        <p>Type d'handicap : {{ trim($bike->Disability_type) }}</p>
        <p>Utilisation du vélo : {{ trim($bike->Bike_use) }}</p>
        <p>Type de pédalage : {{ trim($bike->Pedal_way) }}</p>
        <p>Dextérité des bras : {{ trim($bike->Dexterity_arms) }}</p>
        <p>Équilibre : {{ trim($bike->Balance) }}</p>
        @if($bike->Picture)
            <div>
                <img src="{{ asset($bike->Picture) }}" alt="Vélo {{ $bike->Bike_name }}" style="width:400px;height:auto;">
                 </div>
        @endif
@endsection
