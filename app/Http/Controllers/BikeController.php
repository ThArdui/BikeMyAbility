<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    /**
     * Display a listing of the bikes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();
        return view('touslesvelos', compact('bikes'));
    }

    /**
     * Show the form for creating a new bike.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikes.create');
    }

    /**
     * Store a newly created bike in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // Ajoutez les règles de validation ici
            'Bike_name' => 'required|string|max:70',
            'Description' => 'required|string|max:1500',
            'Pros' => 'nullable|string',
            'Cons' => 'nullable|string',
            'Weight' => 'nullable|numeric|min:0',
            'Electrical_assistance' => 'nullable|boolean',
            'Foldable' => 'nullable|boolean',
            'Speeds_number' => 'integer|min:0',
            'Brakes_type' => 'string|max:500',
            'Frame_height' => 'numeric|min:0',
            'Disability_type' => 'string|max:500',
            'Bike_use' => 'string|max:500',
            'Pedal_way' => 'string|max:500',
            'Dexterity_arms' => 'nstring|max:500',
            'Balance' => 'string|max:500',
            'Picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('Picture')) {
            $path = $request->file('Picture')->store('bikes', 'public');
            $request->merge(['Picture' => $path]);
        }
        Bike::create($request->all());

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike added successfully.');
    }

    /**
     * Display the specified bike.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        return view('bikes.show', compact('bike'));
    }

    /**
     * Show the form for editing the specified bike.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        return view('bikes.edit', compact('bike'));
    }

    /**
     * Update the specified bike in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        $request->validate([
            // Ajoutez les règles de validation ici
        ]);

        $bike->update($request->all());

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike updated successfully');
    }

    /**
     * Remove the specified bike from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        $bike->delete();

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike deleted successfully');
    }
}
