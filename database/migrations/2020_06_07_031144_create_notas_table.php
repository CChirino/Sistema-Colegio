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
            $table->decimal('IL_I');
            $table->decimal('IL_G');
            $table->decimal('IL_F');
            $table->decimal('IIL_I');
            $table->decimal('IIL_G');
            $table->decimal('IIL_F');
            $table->decimal('IIIL_I');
            $table->decimal('IIIL_G');
            $table->decimal('IIIL_F');
            $table->foreignId('estudiante_id')->references('id')->on('inscripcion_materia')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('notas_id')->references('role_user_id')->on('materias')->onDelete('cascade')->unsigned()->nullable();
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
