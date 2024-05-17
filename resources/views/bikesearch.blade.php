@extends('template.projet')
@section('titre')
Trouvez votre vélo idéal - BikemyAbility
@endsection
@section('content')
    @auth
    <h1 class="text-center"> Trouvez votre vélo idéal</h1>
<form action="{{url('rechercher-velos')}}" method="get">
    @csrf
    <fieldset>
        <legend> Votre type d'handicap</legend>
         <p> <label for="physique">Physique</label>
                 <input id="physique" name="handicap[]"  type="checkbox" value="physique" >
        </p>
         <p>
            <label for="auditif">auditif</label>
                <input id="auditif" name="handicap[]" type="checkbox"  value="auditif" >
        </p>
         <p>
           <label for="visuel">Visuel</label>
               <input id="visuel" name="handicap[]"  type="checkbox" value="visuel" >
       </p>
         <p>
            <label for="cognitif"> Cognitif</label>
                <input id="cognitif" name="handicap[]"  type="checkbox" value="cognitif" >
        </p>
         <p>
            <label for="mental">mental</label>
                <input id="mental" name="handicap[]" type="checkbox" value="mental" >
        </p>
    </fieldset>
    <fieldset>
        <legend> Assistance electrique </legend>
        <p>

            <input id="assistance_electric_yes" name="electrical_assistance" type="radio" value="oui_assistance_electric" > <label for="assistance_electric_yes" aria-label="Oui assistance electrique">Oui</label>

            <input id="assistance_electric_no" name="electrical_assistance" type="radio" value="non_assistance_electric" ><label for="assistance_electric_no" aria-label= "Non assistance electrique">Non</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Comment souhaitez-vous vivre votre plaisir cyclable?</legend>

        <p> <input type="radio" id="solo" name="utility" value="solo"> <label for="solo"> En solo </label> </p>

        <p>  <input  id="duo" type="radio" name="utility" value="duo"><label for="duo"> En duo</label>
        </p>
        <p>
            <input  id="several " type="radio" name="utility" value="several"> <label for="several ">À plusieurs</label>
        </p>
    </fieldset>
    <fieldset>
        <legend> Pédalage </legend>
        <p>
            <input id="pedal_legs" type="radio" name="pedal" value="pedal_legs" >
            <label for="pedal_legs">Je sais pédaler avec mes jambes</label>
        </p>
        <p>
            <input id="pedal_arms" type="radio" name="pedal" value="pedal_arms" >
            <label for="pedal_arms">Je sais pédaler avec mes bras</label>
        </p>
        <p>
           <input id="pedal_arms_legs" type="radio" name="pedal" value="pedal_arms_legs" >
            <label for="pedal_arms_legs">Je sais pédaler avec mes jambes et avec mes bras</label>
       </p>
        <p>
    <input id="no_pedal" type="radio" name="pedal" value="Auccun des deux" >
            <label for="no_pedal">  Auccun des deux</label>
</p>
    </fieldset>
    <fieldset>
        <legend> Dextérité membres supérieurs</legend>
        <label for="usearms">Niveau de dextérité des membres supérieurs :</label>
        <select id="usearms" name="Dexterity_arms" required>
            <option value="">Sélectionnez le niveau de dextérité des membres supérieurs</option>
            <option value="dexterity_good"> La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses… </option>
            <option value="dexterity_average"> La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués. </option>
            <option value="dexterity_difficult"> J’ai du mal à utiliser mes mains</option>
        </select>
    </fieldset>
<fieldset>
    <legend> Type de freinage </legend>
    <p> <input type="checkbox"  id="drum_brake" name="brakes[]" value="drum_brake">
        <label for="drum_brake"> Freins à tambours</label>  </p>
    <p> <input type="checkbox"  id="disc_brakes" name="brakes[]" value="disc_brakes">
        <label for="disc_brakes"> Freins à disques</label>  </p>
    <p> <input type="checkbox"  id="coaster_brakes" name="brakes[]" value="coaster_brakes">
        <label for="coaster_brakes"> Freins à rétropédalage</label>  </p>
    <p> <input type="checkbox"  id="anyway_brakes" name="brakes[]" value="anyway_brakes">
        <label for="anyway_brakes"> Peu importe </label>  </p>
</fieldset>
    <fieldset>
        <legend> Equilibre</legend>
        <label for="balance">Niveau d'équilibre :</label>
        <select id="balance" name="balance" required>
            <option value="">Sélectionnez votre niveau d'équilibre</option>
            <option value="good_balance">Je peux tenir sur une selle</option>
            <option value="seat_needed">J’ai besoin d’être dans un siège</option>
            <option value="seat_with_positioning_elements">J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables </option>
            <option value="wheelchair_preference"> J’ai besoin/ je préfère rester dans mon fauteuil roulant </option>
        </select>
    </fieldset>
    <fieldset>
        <legend> Hauteur du cadre</legend>
        <p> <input id="frame_hight" type="radio" name="frame_height" value="frame_hight">
            <label for="frame_hight"> Cadre haut </label>
        </p>
        <p> <input id="frame_low" type="radio" name="frame_height" value="frame_low">
            <label for="frame_low"> Cadre bas </label>
        </p>
        <p> <input id="frame_anyway" type="radio" name="frame_height" value="frame_anyway">
            <label for="frame_anyway">Peu importe </label>
        </p>
    </fieldset>
<p>
    <input type="submit" class="btn btn-primary" value="Je trouve un vélo qui me convient!">
</p>
    @endauth
    @guest<a href="{{ route('login') }}">Veuillez vous authentifier</a>
@endguest

</form>
    @endsection
