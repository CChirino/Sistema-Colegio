<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MateriasPensum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_pensum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pensum_id')->references('id')->on('pensums')->onDelete('cascade');
            $table->foreignId('materia_id')->references('id')->on('materias')->onDelete('cascade');
            // $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        //
    }
}
