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
            $table->decimal('IL-I');
            $table->decimal('IL-G');
            $table->decimal('IL-F');
            $table->decimal('IIL-I');
            $table->decimal('IIL-G');
            $table->decimal('IIL-F');
            $table->decimal('IIIL-I');
            $table->decimal('IIIL-G');
            $table->decimal('IIIL-F');
            $table->foreignId('notas_id')->references('role_user_id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('estudiante_id')->references('id')->on('inscripcion_materia')->onDelete('cascade')->unsigned()->nullable();
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
