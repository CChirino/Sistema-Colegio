<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->decimal('IL_I')->nullable();
            $table->decimal('IL_G')->nullable();
            $table->decimal('IL_F')->nullable();
            $table->decimal('IIL_I')->nullable();
            $table->decimal('IIL_G')->nullable();
            $table->decimal('IIL_F')->nullable();
            $table->decimal('IIIL_I')->nullable();
            $table->decimal('IIIL_G')->nullable();
            $table->decimal('IIIL_F')->nullable();
            $table->foreignId('estudiante_id')->references('id')->on('inscripcion_materia')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('materias_id')->references('id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('notas');
    }
}
