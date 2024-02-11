<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emplois extends Model
{
    protected $table = 'emplois';
    protected $fillable = [
        'localite',
        'jour',
        'heure_debut',
        'heure_fin',
        'module',
        'activite',
        'email',
    ];

    // public function chefDepartement()
    // {
    //     return $this->belongsTo(ChefDepartement::class, 'id_chefdepar');
    // }

    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class, 'id_admin');
    // }
}
