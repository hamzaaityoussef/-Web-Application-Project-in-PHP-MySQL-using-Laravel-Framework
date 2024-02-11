<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepondAuDemande extends Model
{
    use HasFactory;
    protected $table = 'repondaudemande';
    protected $fillable = ['type', 'from', 'to', 'message', 'id_prof'];


    public function etudiant()
{
    return $this->belongsTo(Etudiant::class);
}


    public function prof()
    {
        return $this->belongsTo(Prof::class,'id_prof');
    }

    public function chefFiliere()
    {
        return $this->belongsTo(ChefFiliere::class, 'id_cheffiliere');
    }
}
