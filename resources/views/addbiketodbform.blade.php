<h1>Ajoutez un vélo </h1>

<form action="" method="post">
    @csrf

<fieldset>
    <legend> Informations générales sur le vélo </legend>
    <p>
        <label for="bike_name"> Nom du modèle: </label>
        <input type="text" id="bike_name" name="bike_name" required>
    </p>
    <label for="description">Description: </label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>
    <p>
        <label for="pros">Avantages: </label>
        <textarea id="pros" name="pros" rows="4" cols="50" required></textarea>

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
            <input type="number"  name="weight" id="weight">
        </p>
        <p>
            <label> Pliable :</label>
            <input type="radio" id="foldable_true" name="foldable" value="1">
            <label for="foldable_true">Pliable</label>
            <input type="radio" id="foldable_false" name="foldable" value="0">
            <label for="foldable_false">Non pliable</label>
        </p>

        <p>
            <label for="speeds_number"> Nombre de vitesses: </label>
            <input type="number"  name="speeds_number" id="speeds_number">
        </p>

        <p>
            <label for="breaks_type"> Type de freins: </label>
            <input type="text" id="breaks_type" name="breaks_type" required>
        </p>

        <p>
            <label> Assistance électrique :</label>
            <input type="radio" id="electric_assitance_true" name="electric_assitance" value="1">
            <label for="electric_assitance_true">Assistance électrique</label>
            <input type="radio" id="electric_assitance_false" name="electric_assitance" value="0">
            <label for="electric_assitance_false">Pas d'assistance électrique</label>
        </p>
        <p>
            <label for="seat_type"> Type d'assise </label>
            <input type="text" id="seat_type" name="seat_type" required>
        </p>
    </fieldset>
<fieldset>
    <legend> En solo, en duo ou à plusieurs</legend>
    <p>
        <label> Utilisation en solo :</label>
        <input type="radio" id="use_solo_true" name="use_solo" value="1">
        <label for="use_solo_true">En solo</label>
        <input type="radio" id="use_solo_false" name="use_solo" value="0">
        <label for="use_solo_false">Pas en solo</label>
    </p>

    <p>
        <label> Utilisation en duo :</label>
        <input type="radio" id="use_duo_true" name="use_duo" value="1">
        <label for="use_duo_true"> En duo</label>
        <input type="radio" id="use_duo_false" name="use_duo" value="0">
        <label for="use_duo_false">Pas en duo </label>
    </p>

    <p>
        <label> Utilisation à plusieurs  :</label>
        <input type="radio" id="use_several_true" name="use_several" value="1">
        <label for="use_several_true"> A plusieurs </label>
        <input type="radio" id="use_several_false" name="use_several" value="0">
        <label for="use_several_false"> Pas à plusieurs </label>
    </p>
</fieldset>
<fieldset>
    <legend> Utilisation membres inférieurs </legend>

    <p>
        <label> Bonne utilisation des jambes :</label>
        <input type="radio" id="use_legs_true" name="use_legs" value="1">
        <label for="use_legs_true"> Bonne utilisation des jambes</label>
        <input type="radio" id="use_legs_false" name="use_legs" value="0">
        <label for="use_legs_false"> Pas bonne utilisation des jambes</label>
    </p>

    <p>
        <label>Utilsation partielle des jambes :  :</label>
        <input type="radio" id="partial_use_legs_true" name="partial_use_legs" value="1">
        <label for="partial_use_legs_true">Utilisation partielle des jambes</label>
        <input type="radio" id="partial_use_legs_false" name="partial_use_legs" value="0">
        <label for="partial_use_legs_false"> Pas d'utilisation partielle des jambes</label>
    </p>
    <p>
        <label>  Utilsation des jambes impossible:</label>
        <input type="radio" id="no_use_legs_true" name="no_legs" value="1">
        <label for="no_use_legs_true">Utilisation des jambes impossible</label>
        <input type="radio" id="no_use_legs_false" name="no_legs" value="0">
        <label for="no_use_legs_false">Utilisation des jambes possibles</label>
    </p>
</fieldset>
<fieldset>
    <legend> Utilisation membres supérieurs</legend>
    <p>
        <label> Très bonne utilisation des bras :</label>
        <input type="radio" id="very_good_use_arms_true" name=very_good_use_arms"" value="1">
        <label for="very_good_use_arms_true"> Très bonne utilisation des bras</label>
        <input type="radio" id="very_good_use_arms_false" name="very_good_use_arms" value="0">
        <label for="very_good_use_arms_false">Pas très bonne utilisation des bras</label>
    </p>
    <p>
        <label> Bonne utilisation des bras : :</label>
        <input type="radio" id="good_use_arms_true" name="good_use_arms" value="1">
        <label for="good_use_arms_true">Bonne utilisation des bras</label>
        <input type="radio" id="good_use_arms_false" name="good_use_arms" value="0">
        <label for="good_use_arms_false">Pas bonne utilisation des bras</label>
    </p>

    <p>
        <label>  Utilisation des bras partielle:</label>
        <input type="radio" id="partial_use_arms_true" name="partial_use_arms" value="1">
        <label for="partial_use_arms_true">Utilisation des bras partielle </label>
        <input type="radio" id="partial_use_arms_false" name="partial_use_arms" value="0">
        <label for="partial_use_arms_false">Pas d'utilisation des bras partielle</label>
    </p>

    <p>
        <label> Utilisation des bras impossible :</label>
        <input type="radio" id="no_use_arms_true" name="no_use_arms" value="1">
        <label for="no_use_arms_true">Utilisation des bras impossible</label>
        <input type="radio" id="no_use_arms_false" name="no_use_arms" value="0">
        <label for="no_use_arms_false"> Utilisation des bras possible</label>
    </p>

</fieldset>

    <fieldset>
        <legend> Equilibre </legend>
        <p>
            <label>  Je peux tenir sur une selle :</label>
            <input type="radio" id="saddel_ok_true" name="saddel_ok" value="1">
            <label for="saddel_ok_true">Je peux tenir sur une selle</label>
            <input type="radio" id="saddel_ok_false" name="saddel_ok" value="0">
            <label for="saddel_ok_false">Je peux pas tenir sur une selle </label>
        </p>
        <p>
            <label>   Je peux tenir sur une selle mais il me faut un soutien supplémentaire:</label>
            <input type="radio" id="partial_saddel_ok_true" name="partial_saddel_ok" value="1">
            <label for="partial_saddel_ok_true"> Je peux tenir sur une selle mais il me faut un soutien supplémentaire </label>
            <input type="radio" id="partial_saddel_ok_false" name="partial_saddel_ok" value="0">
            <label for="partial_saddel_ok_false">  Pas le cas </label>
        </p>

        <p>
            <label> J'ai besoin d'un siège :</label>
            <input type="radio" id="seat_needed_true" name="seat_needed" value="1">
            <label for="seat_needed_true"> J'ai besoin d'un siège</label>
            <input type="radio" id="seat_needed_false" name="seat_needed" value="0">
            <label for="seat_needed_false">J'ai pas forcément besoin d'un siège</label>
        </p>
        <p>
            <label>  J’ai besoin d’être dans un siège où des éléments de positionnement sont intégrables :</label>
            <input type="radio" id="seat_needed_plus_true" name="seat_needed_plus" value="1">
            <label for="seat_needed_plus_true"> J’ai besoin d’être dans un siège où des éléments de positionnement sont intégrables</label>
            <input type="radio" id="seat_needed_plus_false" name="seat_needed_plus" value="0">
            <label for="seat_needed_false"> J’ai pas forcément esoin d’être dans un siège où des éléments de positionnement sont intégrables</label>
        </p>

        <p>
            <label> J’ai besoin/ je préfère rester dans mon fauteuil roulant :</label>
            <input type="radio" id="wheeelchair_true" name="wheelchair" value="1">
            <label for="wheeelchair_true">J’ai besoin/ je préfère rester dans mon fauteuil roulant </label>
            <input type="radio" id="wheelchair_false" name="wheelchair" value="0">
            <label for="wheelchair"> J’ai pas forcément besoin/ je préfère pas forcément  rester dans mon fauteuil roulant</label>
        </p>
    </fieldset>


<fieldset>
    <legend> Dextérité des mains </legend>
    <p>
        <label> La dextérité de mes mains est bonne :</label>
        <input type="radio" id="md_good_true" name="md_good" value="1">
        <label for="md_good_true">La dexérité de mes mains est bonne </label>
           <input type="radio" id="md_good_false" name="md_good" value="0">
        <label for="md_good_false"> La dexérité de mes mains n'est pas bonne </label>
    </p>
    <p>
        <label> La dextérité de mes mains est moyenne :</label>
        <input type="radio" id="md_partial_true" name="md_partial" value="1">
        <label for="md_partial_true"> La dextérité de mes mains est moyenne </label>
        <input type="radio" id="md_partial_false" name="md_partial" value="0">
        <label for="md_partial_false"> La dextérité de mes mains n'est pas moyenne </label>
    </p>
    <p>
        <label> Je n'ai pas l'usage de mes mains :</label>
        <input type="radio" id="no_md_true" name="no_md" value="1">
        <label for="no_md_true">Je n'ai pas l'usage de mes mains</label>
        <input type="radio" id="no_md_false" name="no_md" value="0">
        <label for="no_md_false"> J'ai l'usage de mes mains</label>
    </p>
</fieldset>

 <fieldset>
     <legend> Pédalage</legend>
     <p>
         <label>  Je sais pédaler:</label>
         <input type="radio" id="pedal_ok_true" name="pedal_ok" value="1">
         <label for="pedal_ok_true">Je sais pédaler</label>
         <input type="radio" id="pedal_ok_false" name=pedal_ok"" value="0">
         <label for="pedal_ok_false">Je sais pédaler </label>
     </p>
     <p>
         <label>  Je sais pédaler un peu:</label>
         <input type="radio" id="partial_pedal_true" name="partial_pedal" value="1">
         <label for=partial_pedal"_true">Je sais pédaler un peu</label>
         <input type="radio" id="partial_pedal_false" name="partial_pedal" value="0">
         <label for="partial_pedal_false"> Je sais pas pédaler un peu</label>
     </p>
     <p>
         <label>  Je sais pas pédaler :</label>
         <input type="radio" id="no_pedal_true" name="no_pedal" value="1">
         <label for="no_pedal_true"> Je sais pas pédaler</label>
         <input type="radio" id="no_pedal_false" name="no_pedal" value="0">
         <label for="no_pedal_false"> Je sais  pédaler</label>
     </p>

 </fieldset>
<fieldset>
    <legend> Données pour la page web </legend>
    <p>
        <label for="picture"> Veuillez insérez une image?</label>
        <input type="file" name="picture" id="picture" required>

    </p>

    <p>
        <label for="bike_view"> Chemin vers la vue</label>
        <input type="text" name="bike_view" id="bike_view" required>
    </p>
</fieldset>


    <input type="submit" value="Enregistrer dans la base de données!">
</form>
