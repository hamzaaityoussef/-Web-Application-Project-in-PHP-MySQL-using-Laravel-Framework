<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'reclamations';

    protected $fillable = [
        'datashow',
        'prise_internet',
        'chaise',
        'tableau',
        'description',
        'classe',
      
    ];

    public function etudiant()
{
    return $this->belongsTo(Etudiant::class);
}


}
