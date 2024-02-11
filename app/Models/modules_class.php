<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleClasse extends Model
{
    protected $table = 'modules_class';
    protected $fillable = [];

    public function classe()
    {
        return $this->belongsTo(Classes::class, 'id_class');
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
