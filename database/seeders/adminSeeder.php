<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\ChefDepartement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nom' => 'elbahi',
            'prenom' => 'hassan',
            'email' => 'elbahi@admin.com',
            'password' => bcrypt('hassan12345'),
        ]);
    }
}
