<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\BikeAdd;

    class AddBikeToDb extends Controller
    {
        /*
        A UTILISER?
        public function ShowAddBikeToDbForm():string
        {
            return view('addbiketodbform');
        }*/
        public function Add_Bike_To_Db(Request $request):string
        {
            $request->validate([
                'bike_name' => 'required|string|min:5|max:255',
                'description' => 'required|string|min:10',
                'pros' => 'required|string|min:10',
                'cons' => 'required|string|min:10',
                'weight' => 'required|numeric|min:0',
                'foldable' => 'required|boolean',
                'speeds_number' => 'required|integer|min:0',
                'breaks_type' => 'required|string|max:255',
                'electric_assitance' => 'required|boolean',
               /*  A AJOUTER DANS LA DB ,?'seat_type' => 'required|string|max:255',*/
                'use_solo' => 'required|boolean',
                'use_duo' => 'required|boolean',
                'use_several' => 'required|boolean',
                'pedal_legs' => 'required|boolean',
                'pedal_arms' => 'required|boolean',
                'pedal_arms_legs' => 'required|boolean',
                'no_pedal' => 'required|boolean',
                'dexterity_good' => 'required|boolean',
                'dexterity_middel' => 'required|boolean',
                'no_dexterity' => 'required|boolean',
                'saddel_ok'=> 'required|boolean',
                'seat_needed'=> 'required|boolean',
                'seat_needed_plus'=> 'required|boolean',
                'wheelchair'=> 'required|boolean',
                /*'picture' => 'required|file|image|mimes:jpeg,png|max:2048',*/

                /*
                'use_legs' => 'required|boolean',
                'partial_use_legs' => 'required|boolean',
                'no_legs' => 'required|boolean',
                'very_good_use_arms' => 'required|boolean',
                'good_use_arms' => 'required|boolean',
                'partial_use_arms' => 'required|boolean',
                'no_use_arms' => 'required|boolean',
                'saddel_ok' => 'required|boolean',
                'partial_saddel_ok' => 'required|boolean',
                'seat_needed' => 'required|boolean',
                'seat_needed_plus' => 'required|boolean',
                'wheelchair' => 'required|boolean',
                'md_good' => 'required|boolean',
                'md_partial' => 'required|boolean',
                'no_md' => 'required|boolean',
                'pedal_ok' => 'required|boolean',
                'partial_pedal' => 'required|boolean',
                'no_pedal' => 'required|boolean',
                'bike_view' => 'required|url', */

            ]);

            $newBike=BikeAdd::create([
                'Bike_name' => $request->input('bike_name'),
                'Description' => $request->input('description'),
                'Pros' => $request->input('pros'),
                'Cons' => $request->input('cons'),
                'Weight' => $request->input('weight'),
                'Foldable' => $request->input('foldable', false), // si le champ n'est pas renseigné, il sera faux par défaut
                'Speeds_number' => $request->input('speeds_number'),
                'Breaks_type' => $request->input('breaks_type'),
                'Electric_assistance' => $request->input('electric_assitance', false), // même chose ici
             /*   a mettre si on ajoute ce champ dans la dbb'Seat_type' => $request->input('seat_type'),*/
                'Use_solo' => $request->input('use_solo', false),
                'Use_duo' => $request->input('use_duo', false),
                'Use_several' => $request->input('use_several', false),

                'pedal_legs'=>$request->input('pedal_legs',false),/* fait jusqu'ici*/
                'pedal_arms'=>$request->input('pedal_arms',false),
                'pedal_arms_legs'=>$request->input('pedal_arms_legs',false),
                'no_pedal'=>$request->input('no_pedal',false),
                'dexterity_good'=>$request->input('dexterity_good',false),
                'dexterity_middel'=>$request->input('dexterity_middel',false),
                'no_dexterity'=>$request->input('no_dexterity',false),
                'saddel_ok'=>$request->input('saddel_ok',false),
                'seat_needed'=>$request->input('seat_needed',false),
                'Seat_needed_plus'=>$request->input('seat_needed_plus', false),
                'Wheelchairr'=>$request->input('wheelchair', false),
                'Picture' => $request->input('picture', false),
                'Bikeview' => $request->input('bike_view',false),


            ]);
            return redirect('/resultaddbiketodb')->with('success', 'Le vélo a bien été ajouté à la base de données !');

        }
    }
