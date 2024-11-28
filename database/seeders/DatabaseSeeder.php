<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Provider;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class
        ]);

        $rootUser = User::firstOrCreate(
            ['email' => 'root@example.com'],
            [
                'name' => 'root',
                'email' => 'root@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password@444'),
            ]
        );

        if (!$rootUser->hasRole('root')) {
            $rootUser->assignRole('root');
        }

        if (Client::count() === 0) {
            $this->call(ClientSeeder::class);
        }

        if (Provider::count() === 0) {
            $this->call(ProviderSeeder::class);
        }

        $this->call(LoanSeeder::class);
        $this->call(MessageSeeder::class);
    }
}
