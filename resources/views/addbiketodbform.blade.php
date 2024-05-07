<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'ajout de vélo à la db </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="text-center">Ajoutez un vélo :-) </h1>

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
        <textarea id="description" name="description" rows="4" cols="50" required value="{{ old('description') }}"></textarea>
        <p>
            <label for="pros">Avantages: </label>
            <textarea id="pros" name="pros" rows="4" cols="50" class="form-control {{ $errors->has('pros') ? 'is-invalid': '' }}"  value="{{ old('pros') }}" required></textarea>
            @if($errors->has('pros'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pros') }}</strong>
                </span>
            @endif
        </p>
        <p>

            <label for="cons">Inconvénients: </label>
            <textarea id="cons" name="cons" rows="4" cols="50" required></textarea>
        </p>


    </fieldset>

    <fieldset>
        <legend>Caractéristtiques principales </legend>
        <p>
            <label for="weight"> Poids: </label>
            <input type="number"   name="weight" id="weight" required>
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
            <input type="number"  name="speeds_number" id="speeds_number" required>
        </p>

        <p>
            <label for="breaks_type"> Type de freins: </label>
            <input type="text" id="breaks_type" name="breaks_type" required>
        </p>

        <p>
            <label> Assistance électrique :</label>
            <input type="radio" id="electric_assitance_true" name="electric_assitance" required value="1">
            <label for="electric_assitance_true">Assistance électrique</label>
            <input type="radio" id="electric_assitance_false" name="electric_assitance" required
                   value="0">
            <label for="electric_assitance_false">Pas d'assistance électrique</label>
        </p>
       <!-- <p> a ajouter si on ajoute dans la db?"
            <label for="seat_type"> Type d'assise </label>
            <input type="text" id="seat_type" name="seat_type" required>
        </p> -->
    </fieldset>
    <fieldset>
        <legend> En solo, en duo ou à plusieurs</legend>
        <p>
            <label> Utilisation en solo :</label>
            <input type="radio" id="use_solo_true" name="use_solo" value="1" required>
            <label for="use_solo_true" aria-label="oui solo">Oui</label>
            <input type="radio" id="use_solo_false" name="use_solo" value="0" required>
            <label for="use_solo_false" aria-label="non solo">Non</label>
        </p>

        <p>
            <label> Utilisation en duo :</label>
            <input type="radio" id="use_duo_true" name="use_duo" value="1" required>
            <label for="use_duo_true"  aria-label="oui duo">> Oui</label>
            <input type="radio" id="use_duo_false" name="use_duo" value="0" required>
            <label for="use_duo_false"  aria-label="non duo">Non </label>
        </p>

        <p>
            <label> Utilisation à plusieurs  :</label>
            <input type="radio" id="use_several_true" name="use_several" value="1" required>
            <label for="use_several_true" aria-label="oui a plusieurs"> Oui</label>
            <input type="radio" id="use_several_false" name="use_several" value="0" required>
            <label for="use_several_false" aria-label="NON à plusieurs"> Non</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Pédalage</legend>

        <p>
            <label> Pédalage avec les jambes :</label>
            <input type="radio" id="pedal_legs_true" name="pedal_legs" value="1" required>
            <label for="pedal_legs_true" aria-label="Oui pédaler avec les jambes"> Oui</label>
            <input type="radio" id="pedal_legs_false" name="pedal_legs" value="0" required>
            <label for="pedal_legs_false" aria-label="Non  pédaler avec les jambes"> Non </label>
        </p>
<!--<p>
    <label></label>

    <input type="radio" id="" name="" value="1"  required>
    <label for="" aria-label=""> </label>
    <input type="radio" id="" name="" value="0"  required>
    <label for="" aria-label=""> </label>

</p>  -->

        <p>
            <label>Pédaler avec les bras</label>

            <input type="radio" id="pedal_arms_true" name="pedal_arms" value="1"  required>
            <label for="pedal_arms_true" aria-label="Oui pédaler avec les  bras"> Oui</label>
            <input type="radio" id="pedal_arms_false" name="pedal_arms" value="0"  required>
            <label for="pedal_arms_false" aria-label="Non pédaler avec les bras"> Non </label>

        </p>
        <p>
            <label>Pédaler avec les mains et les jambes</label>

            <input type="radio" id="pedal_arms_legs_true" name="pedal_arms_legs" value="1"  required>
            <label for="pedal_arms_legs_true" aria-label="Oui pédaler avec les bras et les jambes">Oui </label>
            <input type="radio" id="pedal_arms_legs_false" name="pedal_arms_legs" value="0"  required>
            <label for="pedal_arms_legs_false" aria-label="Non pédaler avec les bras et les jambes"> Non</label>

        </p>
        <p>
            <label> Je sais pas pédaler</label>

            <input type="radio" id="no_pedal_true" name="no_pedal" value="1"  required>
            <label for="no_pedal_true" aria-label="Oui, je sais pas pédaler">Oui </label>
            <input type="radio" id="no_pedal_false" name="no_pedal" value="0"  required>
            <label for="no_pedal_false" aria-label="Non, je sais pédaler"> Non </label>

        </p>
    </fieldset>
<fieldset>
    <legend> Dextérité membres supérieurs </legend>
    <p>
    <label> La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…</label>

    <input type="radio" id="dexterity_good_true" name="dexterity_good" value="1"  required>
    <label for="dexterity_good_true" aria-label="Oui la dextérité de mes mains est bonne  je sais conduire freiner changer les vitesses "> Oui  </label>
    <input type="radio" id="dexterity_good_false" name="dexterity_good" value="0"  required>
    <label for="dexterity_good_false" aria-label="Non, la dextérité de mes mains n est pas bonne  je sais pas  conduire freiner ou changer les vitesses  "> Non </label>

    </p>

    <p>

    <label>La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués </label>

    <input type="radio" id="dexterity_middel_true" name="dexterity_middel" value="1"  required>
    <label for="dexterity_middel_true" aria-label="oui La dextérité de mes mains est moyenne je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués"> Oui </label>
    <input type="radio" id="dexterity_middel_false" name="dexterity_middel" value="0"  required>
    <label for="dexterity_middel_false" aria-label="Non La dextérité de mes mains n'est  pas moyenne "> Non </label>

    </p>
    <p>
        <label> J'ai du mal à utiliser mes mains</label>

        <input type="radio" id="no_dexterity_true" name="no_dexterity" value="1"  required>
        <label for="no_dexterity_true" aria-label="Oui j'ai du mal à utiliser mes maains"> Oui </label>
        <input type="radio" id="no_dexterity_false" name="no_dexterity" value="0"  required>
        <label for="no_dexterity_false" aria-label="Non j'ai pas forcément du mal à utiliser mes mains"> Non </label>

    </p>
</fieldset>
    <fieldset>
        <legend> Equilibre</legend><p>
            <label> Je peux tenir sur une selle </label>

            <input type="radio" id="saddel_ok_true" name="saddel_ok" value="1"  required>
            <label for="saddel_ok_true" aria-label="Oui, je peux tenir sur une selle">Oui </label>
            <input type="radio" id="saddel_ok_false" name="saddel_ok" value="0"  required>
            <label for="saddel_ok_false" aria-label="Non, je ne peux pas tenir sur une selle">Non </label>

        </p>

        <p>
            <label>J'ai besoin d'être dans un siège</label>

            <input type="radio" id="seat_needed_true" name="seat_needed" value="1"  required>
            <label for="seat_needed_true" aria-label=" Oui j'ai besoin d'être dans  un siège"> Oui </label>
            <input type="radio" id="seat_needed_false" name="seat_needed" value="0"  required>
            <label for="seat_needed_false" aria-label="Non, j'ai pas forcément besoin d'être dans  un siège "> Non</label>

        </p>

        <p>
            <label> J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables.</label>

            <input type="radio" id="seat_needed_plus_true" name="seat_needed_plus" value="1"  required>
            <label for="seat_needed_plus_true" aria-label="Oui J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables "> Oui </label>
            <input type="radio" id="seat_needed_plus_false" name="seat_needed_plus" value="0"  required>
            <label for="seat_needed_plus_false" aria-label="Non j'ai pas forcément besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables"> Non </label>

        </p>

        <p>
            <label> J’ai besoin/ je préfère rester dans mon fauteuil roulant </label>

            <input type="radio" id="wheelchair_true" name="wheelchair" value="1"  required>
            <label for="wheelchair_true" aria-label="Oui J’ai besoin je préfère rester dans mon fauteuil roulant ">Oui </label>
            <input type="radio" id="wheelchair_false" name="wheelchair" value="0"  required>
            <label for="wheelchair_false" aria-label="Non j'ai pas forcément besoin ou je préfère pas forcément rester dans mon fauteuil roulant"> Non </label>

        </p>

    </fieldset>

    <fieldset>
        <legend> Données pour la page web </legend>
        <p>
            <label for="picture"> Veuillez insérez une image?</label>
            <input type="file"  accept="image/jpeg, image/png" maxlength="2048" name="picture" id="picture" required>

        </p>
    </fieldset>

    <input type="submit" value="Enregistrer dans la base de données!">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
1
