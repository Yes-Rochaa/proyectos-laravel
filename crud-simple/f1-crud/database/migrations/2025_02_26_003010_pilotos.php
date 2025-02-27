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
        Schema::create('pilotos', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('equipo_id')->unsigned();
            $table->string('nombre_pilot');
            $table->string('apellido');
            $table->date('nacimiento');
            $table->string('nacionalidad');
            $table->integer('n_coche');
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
