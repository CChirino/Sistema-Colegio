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
            $table->decimal('Primer Lapso Grupal');
            $table->decimal('Primer Lapso Individual');
            $table->decimal('Prueba de Lapso del Primer Lapso');
            $table->decimal('Segundo Lapso Grupal');
            $table->decimal('Segundo Lapso Individual');
            $table->decimal('Prueba de Lapso del Segundo Lapso');
            $table->decimal('Tercer Lapso Grupal');
            $table->decimal('Tercer Lapso Individual');
            $table->decimal('Prueba de Lapso del Tercer Lapso');
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
