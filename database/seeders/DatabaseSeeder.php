<?php

namespace Database\Seeders;

// use App\Models\Etudiant;
// use App\Models\Prof;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProfSeeder::class, 
            EtudiantSeeder::class,
            ChefFiliereSeeder::class,
            chefdepartementSeeder::class,
            adminSeeder::class,
            FiliereSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
