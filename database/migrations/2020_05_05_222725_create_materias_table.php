<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_materia');
            $table->text('descripcion_materia');
            $table->foreignId('pensum_id')->references('id')->on('pensums')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('periodo_id')->references('id')->on('periodos')->onDelete('cascade')->unsigned()->nullable();
            $table->foreignId('role_user_id')->references('id')->on('role_user')->onDelete('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('materias');
    }
}
