<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            // tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            // tabla solicitudes
            'ver-solicitudes',
            'crear-solicitudes',
            'editar-solicitudes',
            'borrar-solicitudes',
            // tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario'

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }

    }
}
