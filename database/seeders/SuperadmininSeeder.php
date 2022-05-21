<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class SuperadmininSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name'=> 'stiy',
            'email'=> 'sky@hotmail.com',
            'cc' => '1234',
            'password'=> bcrypt('12345678')
        ]);
        $rol = Role::create(['name'=>'Administrador']);
    
            $permisos = Permission::pluck('id', 'id')->all();
    
            $rol->syncPermissions($permisos);
    
           $usuario->assignRole('Administrador');
    }
}
