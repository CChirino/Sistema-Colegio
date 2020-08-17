<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InscripcionMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_materia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscripcion_id')->references('id')->on('inscripcions')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('materia_id')->references('id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
            // $table->foreignId('role_user_id')->references('id')->on('role_user')->onDelete('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('inscripcion_materia');

    }
}
