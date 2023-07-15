<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        // $role2 = Role::create(['name' => 'Jefe de Area']);
        $role2 = Role::create(['name' => 'Practicante']);

        Permission::create(['name' => 'admin.dashboard']);

        $permisos = Permission::all();

           $role1->syncPermissions($permisos);
    }
}
