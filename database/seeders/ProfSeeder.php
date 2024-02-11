<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\prof;

class ProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        prof::create([
            'nom' => 'bennani',
            'prenom' => 'amine',
            'module' => 'python',
            'email' => 'bennani@prof.com',
            'password' => bcrypt('amine12345'),
        ]);
        prof::create([
            'nom' => 'essafi',
            'prenom' => 'oumaima',
            'module' => 'devweb',
            'email' => 'essafi@prof.com',
            'password' => bcrypt('oumaima12345'),
        ]);
        prof::create([
            'nom' => 'elwafi',
            'prenom' => 'anas',
            'module' => 'analyse',
            'email' => 'elwafi@prof.com',
            'password' => bcrypt('anas12345'),
        ]);
        prof::create([
            'nom' => 'arif',
            'prenom' => 'med',
            'module' => 'ML',
            'email' => 'arif@prof.com',
            'password' => bcrypt('med12345'),
        ]);
    }
}
