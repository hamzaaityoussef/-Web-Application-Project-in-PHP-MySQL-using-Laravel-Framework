<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    protected $table = 'departement';
    protected $fillable = ['nom'];

    public function chefdepartement()
    {
    return $this->hasOne(chefdepartement::class /*, 'id_admin'*/);
    }

    public function local()
    {
        return $this->hasMany(local::class);
    }
}
