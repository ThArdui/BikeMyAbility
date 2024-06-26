@extends('template.projet')
@section('titre')
Trouvez votre vélo idéal - BikemyAbility
@endsection
@section('content')
    @auth
    <h1 class="text-center text-danger-emphasis"> Trouvez votre vélo idéal</h1>
<form action="{{url('rechercher-velos')}}" method="get">
    @csrf
    <!-- handicap ok-->
    <fieldset>
        <legend> Votre type d'handicap</legend>

         <p>    <input id="physique" name="handicap[]"  type="checkbox" value="physique" >
             <label for="physique">Physique</label>
        </p>
         <p>
             <input id="auditif" name="handicap[]" type="checkbox"  value="auditif" >
            <label for="auditif">Auditif</label>

        </p>
         <p>
             <input id="visuel" name="handicap[]"  type="checkbox" value="visuel" >
           <label for="visuel">Visuel</label>

       </p>
         <p>        <input id="cognitif" name="handicap[]"  type="checkbox" value="cognitif" >
            <label for="cognitif"> Cognitif</label>

        </p>
         <p>             <input id="mental" name="handicap[]" type="checkbox" value="mental" >
            <label for="mental">Mental</label>

        </p>
    </fieldset>
    <!-- assistance electrique ok -->
    <fieldset>
        <legend> Assistance electrique </legend>
        <p>

            <input id="assistance_electric_yes" name="electrical_assistance" type="radio" value="oui_assistance_electric" > <label for="assistance_electric_yes" aria-label="Oui assistance electrique">Oui</label>

            <input id="assistance_electric_no" name="electrical_assistance" type="radio" value="non_assistance_electric" ><label for="assistance_electric_no" aria-label= "Non assistance electrique">Non</label>
        </p>
    </fieldset>
    <!-- utility ok -->
    <fieldset>
        <legend> Comment souhaitez-vous vivre votre plaisir cyclable?</legend>

        <p> <input type="radio" id="solo" name="utility" value="solo"> <label for="solo"> En solo </label> </p>

        <p>  <input  id="duo" type="radio" name="utility" value="duo"><label for="duo"> En duo</label>
        </p>
        <p>
            <input  id="several " type="radio" name="utility" value="several"> <label for="several ">À plusieurs</label>
        </p>
    </fieldset>
    <!-- pedalage  ok-->
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
<!-- freinage ok -->
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
  <!-- hauteur de cadre ok -->
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
