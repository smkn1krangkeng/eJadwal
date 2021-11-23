<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $admin=Role::create(['name' => 'Admin']);
        $gurumapel=Role::create(['name' => 'Guru Mapel']);
        $kaprog=Role::create(['name' => 'Kaprog']);
        $walikelas=Role::create(['name' => 'Wali Kelas']);
        $wakakur=Role::create(['name' => 'Waka Kur']);
        $kepalasekolah=Role::create(['name' => 'Kepala Sekolah']);
        $ketuakelas=Role::create(['name' => 'Ketua Kelas']);
        $user=Role::create(['name' => 'User']);

    }
}
