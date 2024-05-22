@extends('template.projet')
@section('titre')
Formulaire d'ajout de vélo à la db
@endsection
@section('content')
<h1 class="text-center text-danger-emphasis" id="addbike">Ajoutez un vélo </h1>

<form action="{{route('add-bike-db')}}" method="post">

    @csrf

    <fieldset>
        <legend> Informations générales sur le vélo </legend>
        <p>
            <label for="bike_name"> Nom du modèle: </label>
            <input type="text" id="bike_name" name="bike_name" class="form-control {{ $errors->has('bike_name') ? 'is-invalid': '' }}" value="{{ old('bike_name') }}" required>
            @if($errors->has('bike_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bike_name') }}</strong>
                </span>
            @endif
        </p>
        <label for="description">Description: </label>
        <textarea id="description" name="description" rows="4" cols="50" required>{{ old('Description') }}</textarea>
        <p>
            <label for="pros">Avantages: </label>
            <textarea id="pros" name="pros" rows="4" cols="50" class="form-control {{ $errors->has('pros') ? 'is-invalid': '' }}" required>{{ old('Pros') }}</textarea>
            @if($errors->has('pros'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pros') }}</strong>
                </span>
            @endif
        </p>
        <p>

            <label for="cons">Inconvénients: </label>
            <textarea id="cons" name="cons" rows="4" cols="50" required>{{ old('Cons') }}</textarea>
        </p>
    </fieldset>

    <fieldset>
        <legend>Caractéristtiques principales </legend>
        <p>
            <label for="weight"> Poids: </label>
            <input type="text"   name="weight" id="weight" required>
        </p>
        <p>
            <label> Pliable :</label>
            <input type="radio" id="foldable_true" name="foldable" value="1" required>
            <label for="foldable_true">Pliable</label>
            <input type="radio" id="foldable_false" name="foldable" value="0" required>
            <label for="foldable_false">Non pliable</label>
        </p>

        <p>
            <label for="speeds_number"> Nombre de vitesses: </label>
            <input type="number"  name="speeds_number" id="speeds_number" required min="0">
        </p>

        <p>
            <label for="breaks_type"> Type de freins: </label>
            <input type="text" id="breaks_type" name="breaks_type" required>
        </p>

        <p>
            <label> Assistance électrique :</label>
            <input type="radio" id="electric_assistance_true" name="electric_assistance" required value="1">
            <label for="electric_assistance_true">Assistance électrique</label>
            <input type="radio" id="electric_assistance_false" name="electric_assistance" required value="0">
            <label for="electric_assistance_false">Pas d'assistance électrique</label>
        </p>
       <!-- <p> a ajouter si on ajoute dans la db?"
            <label for="seat_type"> Type d'assise </label>
            <input type="text" id="seat_type" name="seat_type" required>
        </p> -->
    </fieldset>
    <fieldset>
        <legend> En solo, en duo ou à plusieurs</legend>
        <p>
            <label for="use_solo"> Utilisation en solo :</label>
            <input type="radio" id="use_solo" name="bike_use" value="use_solo" required>
            </p>
        <p><label for="use_duo"> Utilisation en duo :</label>
            <input type="radio" id="use_duo" name="bike_use" value="use_duo" required>
            </p>

        <p>
            <label for="use_several"> Utilisation à plusieurs  :</label>
            <input type="radio" id="use_several" name="bike_use" value="use_several" required><label for="use_several_false" aria-label="NON à plusieurs"> Non</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Pédalage</legend>
        <p>
            <input type="radio" id="pedal_legs" name="pedal_way" value="legs" required>
            <label for="pedal_legs"> Pédaler avec les jambes</label>
        </p>
        <p>
            <input type="radio" id="pedal_arms" name="pedal_way" value="arms" required>
            <label for="pedal_arms"> Pédaler avec les bras</label>
        </p>
        <p>
            <input type="radio" id="pedal_arms_legs" name="pedal_way" value="arms_legs" required>
            <label for="pedal_arms_legs"> Pédaler avec les mains et les jambes</label>
        </p>
        <p>
            <input type="radio" id="no_pedal" name="pedal_way" value="no_pedal" required>
            <label for="no_pedal">Je ne sais pas pedaler</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Dextérité membres supérieurs </legend>
        <p>
            <input type="radio" id="dexterity_good" name="dexterity_arms" required>
            <label for="dexterity_good">La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…</label>
        </p>
        <p>
            <input type="radio" id="dexterity_middel" name="dexterity_arms" required>
            <label for="dexterity_middel">La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués</label>
        </p>
        <p>
            <input type="radio" id="no_dexterity" name="dexterity_arms" required>
            <label for="no_dexterity">J'ai du mal à utiliser mes mains</label>
        </p>
    </fieldset>

    <fieldset>
        <legend> Equilibre</legend><p>
            <p><label for="saddel"> Je peux tenir sur une selle </label>
            <input type="radio" id="saddel" name="balance" value="sadel" required></p>
        <p><label for="seat_needed">J'ai besoin d'être dans un siège</label>
            <input type="radio" id="seat_needed" name="balance" value="seat_needed" required></p>
        <p><label for="seat_needed_plus">J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables.</label>
            <input type="radio" id="seat_needed_plus" name="balance" value="seat_needed_plus" required></p>
        <p><label for="wheelchair">J’ai besoin/ je préfère rester dans mon fauteuil roulant </label>
            <input type="radio" id="wheelchair" name="balance" value="wheelchair" required></p>
    </fieldset>

    <fieldset>
        <legend> Données pour la page web </legend>
        <p>
            <label for="picture">Veuillez insérez une image?</label>
            <input type="file"  accept="image/jpeg, image/png" maxlength="2048" name="picture" id="picture" required>

        </p>
    </fieldset>

    <input type="submit" value="Enregistrer dans la base de données!">
</form>
@endsection
