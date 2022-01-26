<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignaciondocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('asigdocentes', function (Blueprint $table) {
            $table->id();
            $table->string('estatus');
            $table->string('tipo');
            $table->unsignedBigInteger('docente_id')->nullable();
            $table->foreign('docente_id')->references('id')->on('registrodocentes');
            $table->unsignedBigInteger('asesorexterno_id')->nullable();
            $table->foreign('asesorexterno_id')->references('id')->on('asesorexternos');
            $table->unsignedBigInteger('alumno_id')->nullable();
            $table->foreign('alumno_id')->references('id')->on('alumnosporcarreras');
            
            
            
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
        //
        Schema::dropIfExists('asigdocentes');
    }
}
