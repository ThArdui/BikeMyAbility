<?php

namespace App\Models;

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
        'Foldable',
        'Speeds_number',
        'Breaks_type',
        'Electric_assistance',
        'Use_solo',
        'Use_duo',
        'Use_several',
        'Pedal_legs',
        'Pedal_arms',
        'Pedal_arms_legs',
        'no_pedal',
'dexterity_good',
        'dexterity_middel',
        'no_dexterity',
        'saddel_ok',
        'seat_needed',
        'seat_needed_plus',
        'Wheelchairr',
        'Picture',

    ];


}
