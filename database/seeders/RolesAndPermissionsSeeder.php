<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'view all suggestions']);
        Permission::create(['name' => 'make suggestion']);
        Permission::create(['name' => 'approve suggestion']);
        Permission::create(['name' => 'delete suggestion']);
        Permission::create(['name' => 'edit suggestion']);


        $admin = Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        $regularUser = Role::create(['name' => 'user'])->givePermissionTo(['make suggestion']);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ])->assignRole($admin);

        User::create([
            'name' => 'Mr. Regular User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ])->assignRole($regularUser);
    }
}
