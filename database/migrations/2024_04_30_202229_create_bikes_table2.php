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
        Schema::create('bikes_table2', function (Blueprint $table) {
                $table->id();
                $table->string('Bike_name', 50);
                $table->boolean('Use_solo')->default(false);
                $table->boolean('Use_duo')->default(false);
                $table->boolean('Use_several')->default(false);
                $table->boolean('Uselegs')->default(false);
                $table->boolean('Partial_uselegs')->default(false);
                $table->boolean('No_legs')->default(false);
                $table->boolean('V_good_usearms')->default(false);
                $table->boolean('Good__usearms')->default(false);
                $table->boolean('Partial_usearms')->default(false);
                $table->boolean('No_usearms')->default(false);
                $table->boolean('Saddelok')->default(false);
                $table->boolean('Partialsaddelok')->default(false);
                $table->boolean('Seat_needed')->default(false);
                $table->boolean('Seat_needed_plus')->default(false);
                $table->boolean('Wheelchair')->default(false);
                $table->boolean('Md_good')->default(false);
                $table->boolean('Md_partial')->default(false);
                $table->boolean('No_md')->default(false);
                $table->boolean('Pedalok')->default(false);
                    $table->boolean('Partialpedal')->default(false);
                    $table->boolean('Nopedal')->default(false);
                    $table->string('Picture')->nullable(); // Assuming a path to the image will be stored
                    $table->text('Bikeview')->nullable(); // Assuming blade view path or some HTML content
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes_table2');
    }
};
