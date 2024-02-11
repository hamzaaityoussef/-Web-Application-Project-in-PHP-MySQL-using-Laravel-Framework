<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $fillable = ['module_name'];

    public function prof()
    {
        return $this->belongsTo(Prof::class, 'id_prof');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'modules_class', 'module_id', 'class_id');
    }
}
