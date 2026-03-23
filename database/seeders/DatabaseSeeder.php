<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = \App\Models\User::updateOrCreate(
            [ 'email' => 'test@example.com' ],
            [ 'name' => 'Test User', 'email' => 'test@example.com', 'password' => bcrypt('password') ]
        );

        \App\Models\Company::updateOrCreate(
            [ 'email' => 'company@example.com' ],
            [
                'user_id' => $user->id,
                'name' => 'Test Company',
                'phone' => '1234567890',
                'address' => '123 Main St',
                'website' => 'https://company.example.com',
                'description' => 'Seeded company for testing',
                'logo_path' => null,
                'gst' => null,
                'pan' => null,
            ]
        );
        $this->call(\Database\Seeders\ScratchCardTestSeeder::class);
    }
}
