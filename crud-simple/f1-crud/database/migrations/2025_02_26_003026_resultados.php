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
        Schema::create('resultados', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('carrera_id')->unsigned();
            $table->bigInteger('piloto_id')->unsigned();
            $table->integer('posicion_final');
            $table->integer('puntos');
            $table->integer('v_completas');
            $table->time('mejor_vuelta');
            $table->enum('estado', ['finalizo', 'abandono', 'descalificado']);
            $table->timestamps();

            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete("cascade");
            $table->foreign('piloto_id')->references('id')->on('pilotos')->onDelete("cascade");

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
