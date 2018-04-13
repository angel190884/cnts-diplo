<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit_roles&permissions']);
        Permission::create(['name' => 'inscription']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'god']);
            $role->givePermissionTo(['edit_roles&permissions']);

        $role = Role::create(['name' => 'admin']);
            $role->givePermissionTo(['inscription']);

        $role = Role::create(['name' => 'teacher']);
            //$role->givePermissionTo(['permission']);

        $role = Role::create(['name' => 'student']);
            //$role->givePermissionTo(['permission']);

        $role = Role::create(['name' => 'authenticated']);
            $role->givePermissionTo(['inscription']);
    }
}
