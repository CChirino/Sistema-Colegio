<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
 
class Materia_id {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function get_materia($materia_id) {
        $materia = DB::table('materias')->where('id', $materia_id);
         
        return (isset($materia->id) ? $materia->id : '');
    }
}