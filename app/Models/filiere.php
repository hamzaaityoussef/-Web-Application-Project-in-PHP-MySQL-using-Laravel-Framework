<?php

namespace App\Models;

use App\Models\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class filiere extends Model
{
    protected $table = 'filiere';
    protected $fillable = ['nom', 'description'];

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}
