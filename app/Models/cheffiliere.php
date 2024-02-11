<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ChefFiliere extends Authenticatable
{
    protected $table = 'cheffiliere';
    protected $fillable = ['nom', 'prenom', 'email', 'password','filiere'];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_class');
    }
    
}
