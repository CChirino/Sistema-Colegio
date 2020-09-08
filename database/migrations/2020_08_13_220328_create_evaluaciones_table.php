<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evaluacion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('archivo_evaluacion');
            // $table->foreignId('estudiante_id')->references('id')->on('inscripcion_materia')->onDelete('cascade')->unsigned()->nullable();
            // $table->foreignId('profesores_id')->references('role_user_id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('materia_id')->references('id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('evaluaciones');
    }
}
