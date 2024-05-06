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
                'seat_type' => 'required|string|max:255',
                'use_solo' => 'required|boolean',
                'use_duo' => 'required|boolean',
                'use_several' => 'required|boolean',
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
                'no_pedal' => 'required|boolean',/*
                'bike_view' => 'required|url',
                'picture' => 'required|file|image|mimes:jpeg,png|max:2048',*/
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
                'Seat_type' => $request->input('seat_type'),
                'Use_solo' => $request->input('use_solo', false),
                'Use_duo' => $request->input('use_duo', false),
                'Use_several' => $request->input('use_several', false),
                'Uselegs' => $request->input('use_legs', false),
                'Partial_uselegs' => $request->input('partial_use_legs', false),
                'No_legs' => $request->input('no_legs', false),
                'V_good_usearms' => $request->input('very_good_use_arms', false),
                'Good__usearms' => $request->input('good_use_arms', false),
                'Partial_usearms' => $request->input('partial_use_arms', false),
                'No_usearms' => $request->input('no_use_arms', false),
                'Saddelok' => $request->input('saddel_ok', false),
                'Partialsaddelok' => $request->input('partial_saddel_ok', false),
                'Seat_needed' => $request->input('seat_needed', false),
                'Seat_needed_plus' => $request->input('seat_needed_plus', false),
                'Wheelchair' => $request->input('wheelchair', false),
                'Md_good' => $request->input('md_good', false),
                'Md_partial' => $request->input('md_partial', false),
                'No_md' => $request->input('no_md', false),
                'Pedalok' => $request->input('pedal_ok', false),
                'Partialpedal' => $request->input('partial_pedal', false),
                'Nopedal' => $request->input('no_pedal', false),
                'Picture' => $request->input('picture'),
                'Bikeview' => $request->input('bike_view'),


            ]);
            return redirect('/resultaddbiketodb')->with('success', 'Le vélo a bien été ajouté à la base de données !');

        }
    }
