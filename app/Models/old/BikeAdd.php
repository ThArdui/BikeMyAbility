<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class BikeAdd extends Model
{
    protected $table = 'bikes';

    protected $fillable = [
        'Bike_name',
        'Description',
        'Pros',
        'Cons',
        'Weight',
        'Electrical_assistance',
        'Foldable',
        'Speeds_number',
        'Brakes_type',
        'Frame_height',
        'Disability_type',
        'Bike_use',
        'Pedal_way',
        'Dexterity_arms',
        'Balance',
        'Picture',


    ];


}
