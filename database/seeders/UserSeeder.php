<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(
        [
            'name' => 'Admin',
            'email' => 'admin@test.id',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('Admin');
        $admin->givePermissionTo(['Create.*','Read.*', 'Update.*','Delete.*']);
        //$admin->givePermissionTo(Permission::all());

        $user = User::create(
        [
            'name' => 'User',
            'email' => 'user@test.id',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('User');
        $user->givePermissionTo(['Read.*']);
    }
}
