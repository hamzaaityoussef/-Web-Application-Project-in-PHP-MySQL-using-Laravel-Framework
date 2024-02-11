<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $table = 'materiels';
    protected $fillable = ['type'];

    public function local()
    {
        return $this->belongsTo(Local::class, 'id_local');
    }
}
