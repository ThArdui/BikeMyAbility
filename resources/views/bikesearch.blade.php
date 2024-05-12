<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Trouvez votre vélo idéal - BikemyAbility</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center"> Trouvez votre vélo idéal</h1>
<form action="/rechercher-velos" method="post">
    @csrf
    <fieldset>
        <legend> Votre type d'handicap</legend>
        <p> <label for="physique"> <input id="physique" name="handicap[]"  type="checkbox" value="physique" >Physique</label>
        </p>
        <p>
            <label for="auditif"> <input id="auditif" name="handicap[]" type="checkbox"  value=mental" >Mental</label>
        </p>
       <p>

           <label for="visuel"> <input id="visuel" name="handicap[]"  type="checkbox" value="visuel" >Visuel</label>

       </p>

        <p>
            <label for="mental"> <input id="mental" name="handicap[]"  type="checkbox" value="cognitif" >Cognitif</label>

        </p>

        <p>
            <label for="auditif"> <input id="auditif" name="handicap[]" type="checkbox" value="auditif" >Auditif</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Assistance electrique </legend>
        <label for="elec"> Souhaitez-vous une assistance électrique?</label>
        <input type="radio" id="ouielectrique" value="Oui" name="asselectrique">   <label for="ouielectrique"></label>Oui
        <input type="radio"  id="nonelectrique" value="Nom" name="asselectrique"> <label for="nonelectrique"> Non </label>
    </fieldset>
    <fieldset>
        <legend> Comment souhaitez-vous vivre votre plaisir cyclable?</legend>
        <p> <input id="solo" type="checkbox" name="utility[]" value="solo"> <label for="solo"> En solo</label></p>
        <p>  <input  id="duo" type="checkbox" name="utility[]" value="duo"><label for="duo"> En duo</label>
        </p>
        <p>
            <input  id="several " type="checkbox" name="utility[]" value="several">       <label for="several ">À plusieurs</label></p>

    </fieldset>

    <fieldset>
        <legend> Pédalage </legend>
        <p>
            <input id="pedal_legs" type="checkbox" name="pedal[]" value="pedal_legs" > <label for="pedal_legs">Je sais pédaler avec mes jambes</label>
        </p>

        <p>
            <input id="pedal_arms" type="checkbox" name="pedal[]" value="pedal_arms" > <label for="pedal_arms">Je sais pédaler avec mes bras</label>
        </p>

       <p>
           <input id="pedal_arms_legs" type="checkbox" name="pedal[]" value="pedal_arms_legs" > <label for="pedal_arms_legs">Je sais pédaler avec mes jambes et avec mes bras</label>
       </p>
<p>
    <input id="no_pedal" type="checkbox" name="pedal[]" value="no_pedal" > <label for="no_pedal">  Auccun des deux</label>

</p>


    </fieldset>


    <fieldset>
        <legend> Dextérité membres supérieurs</legend>
        <select id="usearms" name="usearms" required>
            <option>Dextérité membres supérieurs</option>
            <option> La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses… </option>
            <option> La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués. </option>
            <option> J’ai du mal à utiliser mes mains</option>

        </select>
    </fieldset>
<fieldset>
    <legend> Type de freinage </legend>
    <p> <input type="checkbox"  id="drum_brake" name="brakes[]" value="drum_brake"> <label for="drum_brake"> Freins à tambours</label>  </p>
    <p> <input type="checkbox"  id="disc_brakes" name="brakes[]" value="disc_brakes"> <label for="disc_brakes"> Freins à disques</label>  </p>
    <p> <input type="checkbox"  id="coaster_brakes" name="brakes[]" value="coaster_brakes"> <label for="coaster_brakes"> Freins à rétropédalage</label>  </p>
    <p> <input type="checkbox"  id="anyway_brakes" name="brakes[]" value="anyway_brakes"> <label for="anyway_brakes"> Peu importe </label>  </p>
</fieldset>
    <fieldset>
        <legend> Equilibre</legend>
        <select id="balance" name="balance" required>
            <option> Equilibre</option>
            <option>Je peux tenir sur une selle</option>
            <option>J’ai besoin d’être dans un siège</option>
            <option>J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables </option>
            <option> J’ai besoin/ je préfère rester dans mon fauteuil roulant </option>
        </select>
    </fieldset>

    <fieldset>
        <legend> Hauteur du cadre</legend>
        <p> <input id="frame_hight" type="checkbox" name="frame_height" value="frame_hight"><label for="frame_hight"> Cadre haut </label> </p>

        <p> <input id="frame_low" type="checkbox" name="frame_height" value="frame_low"><label for="frame_low"> Cadre bas </label> </p>
        <p> <input id="frame_anyway" type="checkbox" name="frame_height" value="frame_anyway"><label for="frame_anyway">Peu importe </label> </p>
    </fieldset>

<p>
    <input type="submit" class="btn btn-primary" value="Je trouve un vélo qui me convient!">
</p>




</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>
