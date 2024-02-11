<?php

namespace Database\Seeders;

use App\Models\ChefDepartement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chefdepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChefDepartement::create([
            'nom' => 'bekkali',
            'prenom' => 'amine',
            'email' => 'bekkali@departement.com',
            'departement' => 'informatique',
            'password' => bcrypt('amine12345'),
        ]);
        ChefDepartement::create([
            'nom' => 'alaoui',
            'prenom' => 'anas',
            'email' => 'alaoui@departement.com',
            'departement' => 'math',
            'password' => bcrypt('anas12345'),
        ]);
    }
}
