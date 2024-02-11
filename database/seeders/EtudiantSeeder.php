<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etudiant::create([
            'nom' => 'ait youssef',
            'prenom' => 'hamza',
            'classe' => 'AD',
            'email' => 'aityoussef@etudiant.com',
            'password' => bcrypt('hamza12345'),
        ]);

        Etudiant::create([
            'nom' => 'louazir',
            'prenom' => 'amina',
            'classe' => 'SSD',
            'email' => 'louazir@etudiant.com',
            'password' => bcrypt('amina12345'),
        ]);

        Etudiant::create([
            'nom' => 'mohameed',
            'prenom' => 'bouchalkha',
            'classe' => 'AD',
            'email' => 'mohamed@dlg.com',
            'password' => bcrypt('med12345'),
    ]);

    }
}
