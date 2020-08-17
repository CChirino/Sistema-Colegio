<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubirEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subir_evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->string('archivo_evaluacion')->nullable();
            $table->string('nombre_archivo');
            $table->string('comentario');
            $table->foreignId('evaluaciones_id')->references('id')->on('evaluaciones')->onDelete('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('subir_evaluaciones');
    }
}
