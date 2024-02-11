<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    protected $table = 'etudiants';
    protected $fillable = ['nom', 'prenom', 'email', 'password'];

    public function classes()
    {
        return $this->belongsTo(classe::class);
    }
    public function annonces()
    {
        return $this->hasMany(annonces::class);
    }
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }
    public function reponsesAuDemandes()
    {
        return $this->hasMany(RepondAuDemande::class); // Specify the foreign key
    }
}
