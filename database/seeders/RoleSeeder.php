<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $root = Role::create(['name' => 'root']);
        $root->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'show users',
            'create users',
            'update users',
            'destroy users',
            'show own profile',
        ]);

        $client = Role::create(['name' => 'client']);
        $client->givePermissionTo([
            'show own profile'
        ]);
    }
}
