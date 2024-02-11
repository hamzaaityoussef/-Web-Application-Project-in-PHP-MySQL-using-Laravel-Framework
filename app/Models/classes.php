<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['class_name'];

    public function annonces()
    {
        return $this->hasMany(Annonces::class, 'id_annonces');
    }

    public function chefFiliere()
    {
    return $this->hasOne(ChefFiliere::class /*, 'id_cheffiliere'*/);
    }

    public function chefDepartement()
    {
    return $this->hasOne(ChefDepartement::class /*, 'id_chefdepar'*/);
    }

    public function admin()
    {
    return $this->hasOne(Admin::class /*, 'id_admin'*/);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'modules_class', 'class_id', 'module_id');
    }
}
