<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $fillable = ['nom', 'prenom', 'email', 'password'];

    public function classe()
    {
        return $this->hasMany(Classes::class, 'id_class');
    }

    public function chefDepartement()
    {
        return $this->hasMany(ChefDepartement::class, 'id_chefdepar');
    }

    public function local()
    {
        return $this->hasMany(Local::class, 'id_admin');
    }
    public function prof()
    {
        return $this->hasMany(prof::class, 'id_admin');
    }

    public function filiere(){
        return $this->hasMany(filiere::class);
    }
    

    
}
