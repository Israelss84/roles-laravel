<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeders extends Seeder
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
        	'name' => 'Navegar Usuarios',
        	'slug' => 'users.index',
        	'description' => 'Listar usuarios'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de Usuario',
        	'slug' => 'users.show',
        	'description' => 'Ver detalles del usuario'
        ]);
        Permission::create([
        	'name' => 'Edicion de Usuario',
        	'slug' => 'users.edit',
        	'description' => 'Editar datos de un usuario'
        ]);
        Permission::create([
        	'name' => 'Eliminar Usuarios',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar usuario'
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Listar roles'
        ]);
        Permission::create([
        	'name' => 'Ver detalle del rol',
        	'slug' => 'roles.show',
        	'description' => 'Ver detalles del rol'
        ]);
        Permission::create([
        	'name' => 'Edicion de roles',
        	'slug' => 'roles.edit',
        	'description' => 'Editar datos del rol'
        ]);
        Permission::create([
        	'name' => 'Eliminar roles',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar rol'
        ]);
        Permission::create([
        	'name' => 'Creacion de Usuario',
        	'slug' => 'roles.create',
        	'description' => 'Creación datos de un rol'
        ]);


        //Departamentos
        Permission::create([
            'name' => 'Navegar departamento',
            'slug' => 'departamentos.index',
            'description' => 'Listar departamentos'
        ]);
        Permission::create([
            'name' => 'Ver detalle del departamento',
            'slug' => 'departamentos.show',
            'description' => 'Ver detalles del departamento'
        ]);
        Permission::create([
            'name' => 'Edicion de departamento',
            'slug' => 'departamentos.edit',
            'description' => 'Editar datos del departamento'
        ]);
        Permission::create([
            'name' => 'Eliminar departamento',
            'slug' => 'departamentos.destroy',
            'description' => 'Eliminar departamento'
        ]);
        Permission::create([
            'name' => 'Creacion de Usuario',
            'slug' => 'departamentos.create',
            'description' => 'Creación datos de un departamento'
        ]);
        
    }
}
