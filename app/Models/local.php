<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    protected $fillable = ['nom','departement'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_depar');
    }

    public function emploi()
    {
    return $this->hasOne(emplois::class /*, 'id_emploi'*/);
    }

    public function materiels()
    {
        return $this->hasMany(Materiel::class, 'id_local');
    }
}
