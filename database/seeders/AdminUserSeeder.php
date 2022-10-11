<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Hardik',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
        ]);

        $admin_role = Role::create(['name'=>'admin']);

        $permission = Permission::create(['name' => 'role']);
        $admin_role->givePermissionTo($permission);
        $admin->assignRole($admin_role);

    }
}
