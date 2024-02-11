<?php

namespace App\Http\Controllers;

use App\Models\demande;
use App\Models\annonces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RepondAuDemande;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{

   public function prof_welcome()
{
    $id = Auth::id();
    $nom = Auth::user()->nom; 
    $prenom = Auth::user()->prenom; 
    return view('prof.prof_welcome', [
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom
    ]);
}

    public function annonces($id,$nom,$prenom)
    {
    $id = Auth::id();
    $nom = Auth::user()->nom; 
    $prenom = Auth::user()->prenom; 
    $email = auth::user()->email;
    $annonces = annonces::where('creator', $email)->get();
    return view('prof.prof_annonces', [
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'annonces' => $annonces,
    ]);
    }
    
    public function demandes()
    {
        return view('prof.prof_demandes', compact('id', 'nom', 'prenom'));
    }

    public function viewdemande()
    {
    $id = Auth::id();
    $nom = Auth::user()->nom; 
    $prenom = Auth::user()->prenom; 
    $email=Auth::user()->email ; 
    $demande = demande::where('to', $email)->get();
   
    return view('prof.prof_demandes', [
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'demande' => $demande,
    ]);
    
    }
  
 
    

}
