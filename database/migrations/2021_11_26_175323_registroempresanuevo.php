<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registroempresanuevo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroempresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('representante');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('carrera');
            $table->string('estatus');


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
        Schema::dropIfExists('registroempresa');
    }
}
