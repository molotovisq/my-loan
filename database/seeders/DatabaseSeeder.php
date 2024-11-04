<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::firstOrCreate(
            ['email' => 'root@example.com'],
            [
                'name' => 'root',
                'email' => 'root@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password@444'),
            ]
        );

        $this->callOnce(ClientSeeder::class);
    }
}
