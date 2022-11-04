<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
        ]);

        $admin_role = Role::create(['name'=>'admin']);

        $permission = Permission::create(['name' => 'role']);
        $admin_role->givePermissionTo($permission);
        $admin->assignRole($admin_role);
    }
}
