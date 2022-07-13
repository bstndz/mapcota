<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mapcotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mapcotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('apellido2');
            $table->string('rut', 10)->unique();
            $table->date('nacimiento');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('especialidad');
            $table->string('ubicacion');
            $table->string('foto');
            $table->string('video');
            $table->string('descripcion');
            $table->string('titulo');
            $table->string('password');
            $table->timestamps();
            //
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
    }
}
