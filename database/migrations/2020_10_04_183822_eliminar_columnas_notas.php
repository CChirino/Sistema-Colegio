<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EliminarColumnasNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropColumn(['IL_I', 'IL_G', 'IL_F','IIL_I','IIL_G','IIL_F','IIIL_I','IIIL_G','IIIL_F']);
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
