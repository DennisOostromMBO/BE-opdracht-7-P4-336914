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
        // Ensure required users exist
        User::factory()->create(['id' => 1, 'name' => 'User 1', 'email' => 'user1@example.com']);
        User::factory()->create(['id' => 4, 'name' => 'User 4', 'email' => 'user4@example.com']);
        User::factory()->create(['id' => 5, 'name' => 'User 5', 'email' => 'user5@example.com']);

        $this->call(InstructeursTableSeeder::class);
        $this->call(TypeVoertuigenTableSeeder::class);
        $this->call(VoertuigenTableSeeder::class);
        $this->call(VoertuigInstructeurTableSeeder::class);
    }
}
