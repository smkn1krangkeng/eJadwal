<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
        $admin=Role::create(['name' => 'admin']);
        $gurumapel=Role::create(['name' => 'gurumapel']);
        $kaprog=Role::create(['name' => 'kaprog']);
        $walikelas=Role::create(['name' => 'walikelas']);
        $wakakur=Role::create(['name' => 'wakakur']);
        $kepalasekolah=Role::create(['name' => 'kepalasekolah']);
        $ketuakelas=Role::create(['name' => 'ketuakelas']);
        $user=Role::create(['name' => 'user']);

        // create permissions CRUD
        Permission::create(['name' => 'create.*']);
        Permission::create(['name' => 'read.*']);
        Permission::create(['name' => 'update.*']);
        Permission::create(['name' => 'delete.*']);

        // give permissions to Role
        //for admin
        $admin->givePermissionTo('create.*');
        $admin->givePermissionTo('read.*');
        $admin->givePermissionTo('update.*');
        $admin->givePermissionTo('delete.*');

    }
}
