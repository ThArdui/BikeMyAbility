<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

            Schema::table('bikes', function (Blueprint $table) {
                $table->string('bakes_type', 200)->change();
                $table->string('frame_height', 200)->change();
                $table->string('disability_type', 200)->change();
                $table->string('bike_use', 200)->change();
                $table->string('pedal_way', 200)->change();
                $table->string('dexterity_arms', 200)->change();
                $table->string('balance', 200)->change();
                $table->string('picture', 200)->change();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

            Schema::table('bikes', function (Blueprint $table) {
                $table->string('Brakes_type', 70)->change();
                $table->string('Frame_height', 70)->change();
                $table->string('Disability_type', 70)->change();
                $table->string('Bike_use', 70)->change();
                $table->string('Pedal_way', 70)->change();
                $table->string('Dexterity_arms', 70)->change();
                $table->string('Balance', 70)->change();
                $table->string('Picture', 70)->change();
            });

    }
};
