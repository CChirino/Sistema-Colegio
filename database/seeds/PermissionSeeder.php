<?php

use Illuminate\Database\Seeder;
use App\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);
        // Periodo
        Permission::create([
            'name'          => 'Periodo Index',
            'slug'          => 'periodos.index',
            'description'   => 'Periodos Index',      
        ]);

        Permission::create([
            'name'          => 'Periodo Create',
            'slug'          => 'periodos.create',
            'description'   => 'Periodos create',      
        ]);
        Permission::create([
            'name'          => 'Periodo Editar',
            'slug'          => 'periodos.edit',
            'description'   => 'Periodos editar',      
        ]);
        Permission::create([
            'name'          => 'Periodo show',
            'slug'          => 'periodos.show',
            'description'   => 'Periodos show',      
        ]);
        Permission::create([
            'name'          => 'Periodo destroy',
            'slug'          => 'periodos.destroy',
            'description'   => 'Periodos destroy',      
        ]);
        // Materias
        Permission::create([
            'name'          => 'Materias Index',
            'slug'          => 'materias.index',
            'description'   => 'materias Index',      
        ]);

        Permission::create([
            'name'          => 'materias Create',
            'slug'          => 'materias.create',
            'description'   => 'materias create',      
        ]);
        Permission::create([
            'name'          => 'materias Editar',
            'slug'          => 'materias.edit',
            'description'   => 'materias editar',      
        ]);
        Permission::create([
            'name'          => 'materias show',
            'slug'          => 'materias.show',
            'description'   => 'materias show',      
        ]);
        Permission::create([
            'name'          => 'materias destroy',
            'slug'          => 'materias.destroy',
            'description'   => 'materias destroy',      
        ]);
        // horarios
        Permission::create([
            'name'          => 'Horarios Index',
            'slug'          => 'horarios.index',
            'description'   => 'horarios Index',      
        ]);

        Permission::create([
            'name'          => 'Horarios Create',
            'slug'          => 'horarios.create',
            'description'   => 'horarios create',      
        ]);
        Permission::create([
            'name'          => 'Horarios Editar',
            'slug'          => 'horarios.edit',
            'description'   => 'horarios editar',      
        ]);
        Permission::create([
            'name'          => 'Horarios show',
            'slug'          => 'horarios.show',
            'description'   => 'horarios show',      
        ]);
        Permission::create([
            'name'          => 'Horarios destroy',
            'slug'          => 'horarios.destroy',
            'description'   => 'horarios destroy',      
        ]);
        // profesor
        Permission::create([
            'name'          => 'Profesor Index',
            'slug'          => 'profesor.index',
            'description'   => 'profesor Index',      
        ]);

        Permission::create([
            'name'          => 'Profesor Create',
            'slug'          => 'profesor.create',
            'description'   => 'profesor create',      
        ]);
        Permission::create([
            'name'          => 'Profesor Editar',
            'slug'          => 'profesor.edit',
            'description'   => 'profesor editar',      
        ]);
        Permission::create([
            'name'          => 'Profesor show',
            'slug'          => 'profesor.show',
            'description'   => 'profesor show',      
        ]);
        Permission::create([
            'name'          => 'Profesor destroy',
            'slug'          => 'profesor.destroy',
            'description'   => 'profesor destroy',      
        ]);
        // estudiante
        Permission::create([
            'name'          => 'Estudiante Index',
            'slug'          => 'estudiante.index',
            'description'   => 'estudiante Index',      
        ]);

        Permission::create([
            'name'          => 'Estudiante Create',
            'slug'          => 'estudiante.create',
            'description'   => 'estudiante create',      
        ]);
        Permission::create([
            'name'          => 'Estudiante Editar',
            'slug'          => 'estudiante.edit',
            'description'   => 'estudiante editar',      
        ]);
        Permission::create([
            'name'          => 'Estudiante show',
            'slug'          => 'estudiante.show',
            'description'   => 'estudiante show',      
        ]);
        Permission::create([
            'name'          => 'Estudiante destroy',
            'slug'          => 'estudiante.destroy',
            'description'   => 'estudiante destroy',      
        ]);
        // colegio
        Permission::create([
            'name'          => 'Colegio Index',
            'slug'          => 'colegio.index',
            'description'   => 'colegio Index',      
        ]);

        Permission::create([
            'name'          => 'Colegio Create',
            'slug'          => 'colegio.create',
            'description'   => 'colegio create',      
        ]);
        Permission::create([
            'name'          => 'Colegio Editar',
            'slug'          => 'colegio.edit',
            'description'   => 'colegio editar',      
        ]);
        Permission::create([
            'name'          => 'Colegio show',
            'slug'          => 'colegio.show',
            'description'   => 'colegio show',      
        ]);
        Permission::create([
            'name'          => 'Colegio destroy',
            'slug'          => 'colegio.destroy',
            'description'   => 'colegio destroy',      
        ]);
        // coordinador
        Permission::create([
            'name'          => 'Coordinador Index',
            'slug'          => 'coordinador.index',
            'description'   => 'coordinador Index',      
        ]);

        Permission::create([
            'name'          => 'Coordinador Create',
            'slug'          => 'coordinador.create',
            'description'   => 'coordinador create',      
        ]);
        Permission::create([
            'name'          => 'Coordinador Editar',
            'slug'          => 'coordinador.edit',
            'description'   => 'coordinador editar',      
        ]);
        Permission::create([
            'name'          => 'Coordinador show',
            'slug'          => 'coordinador.show',
            'description'   => 'coordinador show',      
        ]);
        Permission::create([
            'name'          => 'Coordinador destroy',
            'slug'          => 'coordinador.destroy',
            'description'   => 'coordinador destroy',      
        ]);   
        // admin
        Permission::create([
            'name'          => 'Administrador Index',
            'slug'          => 'admin.index',
            'description'   => 'admin Index',      
        ]);

        Permission::create([
            'name'          => 'Administrador Create',
            'slug'          => 'admin.create',
            'description'   => 'admin create',      
        ]);
        Permission::create([
            'name'          => 'Administrador Editar',
            'slug'          => 'admin.edit',
            'description'   => 'admin editar',      
        ]);
        Permission::create([
            'name'          => 'Administrador show',
            'slug'          => 'admin.show',
            'description'   => 'admin show',      
        ]);
        Permission::create([
            'name'          => 'Administrador destroy',
            'slug'          => 'admin.destroy',
            'description'   => 'admin destroy',      
        ]);           

    }
    
}
