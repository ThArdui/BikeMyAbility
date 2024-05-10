<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bikes extends Model
{
    use HasFactory;
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
        'pedal_legs',
        'pedal_arms',
        'pedal_arms_legs',
        'no_pedal',
        'dexterity_good',
        'dexterity_middel',
        'no_dexterity',
        'saddel_ok',
        'seat_needed',
        'Seat_needed_plus',
        'Wheelchairr',
        'Picture',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Foldable' => 'boolean',
        'Electric_assistance' => 'boolean',
        'Use_solo' => 'boolean',
        'Use_duo' => 'boolean',
        'Use_several' => 'boolean',
        'pedal_legs' => 'boolean',
        'pedal_arms' => 'boolean',
        'pedal_arms_legs' => 'boolean',
        'no_pedal' => 'boolean',
        'dexterity_good' => 'boolean',
        'dexterity_middel' => 'boolean',
        'no_dexterity' => 'boolean',
        'saddel_ok' => 'boolean',
        'seat_needed' => 'boolean',
        'Seat_needed_plus' => 'boolean',
        'Wheelchairr' => 'boolean',
    ];
}
