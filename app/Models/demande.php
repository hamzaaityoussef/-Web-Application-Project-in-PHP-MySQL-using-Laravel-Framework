<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table = 'demandes';
    protected $fillable = ['type', 'from', 'to', 'message', 'etudiant_id'];


    public function etudiant()
{
    return $this->belongsTo(Etudiant::class, 'etudiant_id');
}


    public function prof()
    {
        return $this->belongsTo(Prof::class, 'id_prof');
    }

    public function chefFiliere()
    {
        return $this->belongsTo(ChefFiliere::class, 'id_cheffiliere');
    }
}
