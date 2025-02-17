<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Games;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Games::factory(100)->create();
        User::factory()->create([
            'name' => 'yey',
            'email' => 'yey@gmail.com',
            'password' => bcrypt('04147006781')       
        ]);
    }
}
