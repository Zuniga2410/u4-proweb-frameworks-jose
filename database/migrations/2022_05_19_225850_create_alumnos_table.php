<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *                                                  
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('alumnos');
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellidos');
            $table->String('carrera');
            $table->double('promedio',8,2);   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
