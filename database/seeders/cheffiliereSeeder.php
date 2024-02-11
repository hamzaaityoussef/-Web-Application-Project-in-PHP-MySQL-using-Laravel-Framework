<?php

namespace Database\Seeders;

use App\Models\ChefFiliere; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChefFiliere::create([
            'nom' => 'hamadi',
            'prenom' => 'hamid',
            'email' => 'hamadi@filier.com',
            'filiere' => 'AD',
            'password' => bcrypt('hamid12345'),
        ]);

        ChefFiliere::create([
            'nom' => 'alami',
            'prenom' => 'dina',
            'email' => 'alami@filier.com',
            'filiere' => 'SSD',
            'password' => bcrypt('dina12346'),
    ]);
    }
}
