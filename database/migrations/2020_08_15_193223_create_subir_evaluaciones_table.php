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
            $table->foreignId('user_id')->references('user_id')->on('role_user')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('evaluaciones_id')->references('id')->on('evaluaciones')->onDelete('cascade')->unsigned()->nullable();
            $table->softDeletes();
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
