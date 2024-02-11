<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonces extends Model
{
    protected $table = 'annonces';
    protected $fillable = ['type', 'classe', 'description', 'creator']; //,'id_cheffiliere','id_chefdepartement'

    public function etudiant()
    {
        return $this->hasMany(Etudiant::class); //, 'id_etu'
    }

    public function prof()
    {
        return $this->belongsTo(Prof::class , 'creator');
    }

    public function chefFiliere()
    {
        return $this->belongsTo(ChefFiliere::class);
    }

    public function chefDepartement()
    {
        return $this->belongsTo(ChefDepartement::class,'creator');
    }
}
