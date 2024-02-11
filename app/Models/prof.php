<?php
namespace App\Models;

use App\Models\annonces;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prof extends Authenticatable
{
    protected $table = 'prof';
    protected $fillable = ['nom', 'prenom','module', 'email', 'password'];

    public function module()
    {
        return $this->hasMany(Module::class, 'id_prof');
    }

    public function annonces()
    {
        return $this->hasMany(annonces::class);
    }

    public function demande()
    {
        return $this->hasMany(demande::class);
    }

    public function reponsesAuDemandes()
    {
        return $this->hasMany(RepondAuDemande::class, 'id_prof'); // Specify the foreign key
    }
}
