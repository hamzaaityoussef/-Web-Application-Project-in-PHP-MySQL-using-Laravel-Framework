<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ChefDepartement extends Authenticatable
{
    protected $table = 'chefdepartement';
    protected $fillable = ['nom', 'prenom', 'email', 'password','departement'];

    // public function departement()
    // {
    //     return $this->belongsTo(Departement::class, 'id_departement');
    // }
    public function annonces()
    {
        return $this->hasMany(annonces::class);
    }
    
}
