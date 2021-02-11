<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnasNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->decimal('E1_1')->nullable();
            $table->decimal('E2_1')->nullable();
            $table->decimal('E3_1')->nullable();
            $table->decimal('E4_1')->nullable();
            $table->decimal('EF_1')->nullable();
            $table->decimal('E1_2')->nullable();
            $table->decimal('E2_2')->nullable();
            $table->decimal('E3_2')->nullable();
            $table->decimal('E4_2')->nullable();
            $table->decimal('EF_2')->nullable();
            $table->decimal('E1_3')->nullable();
            $table->decimal('E2_3')->nullable();
            $table->decimal('E3_3')->nullable();
            $table->decimal('E4_3')->nullable();
            $table->decimal('EF_3')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            //
        });
    }
}
