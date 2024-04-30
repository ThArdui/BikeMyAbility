<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateBikesTable extends migration{
    public function up (){
        schema::create('bikes',function (Blueprint $table){
            $table->id();
            $table->string('name',25);
            $table->text('description');
            $table->string('photo')->nullable();

        });
    }
    public function down (){
        schema::dropIfExists('bikes');
    }
}


