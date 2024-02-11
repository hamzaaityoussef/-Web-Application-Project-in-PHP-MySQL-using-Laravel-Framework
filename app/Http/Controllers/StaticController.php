<?php

namespace App\Http\Controllers;

use App\Models\filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StaticController extends Controller
{
    //invite
    public function welcome() {
        $filieres = filiere::all();
        return view('invite/welcome', compact('filieres'));
    }
    public function login() {
   
        return view('invite/login');
    }
    
    public function presentation() {
        return view('invite/presentation');
    }
    public function departements() {
        return view('invite/departements');
    }

    public function afficherinwelcome()
    {
        $filieres = filiere::all();
        return view('invite.welcome', compact('filieres'));
    }
    //formation
    public function deust() {
        return view('invite/deust');
    }
    public function licence() {
        return view('invite/licence');
    }
    public function master() {
        return view('invite/master');
    }
    public function cycle() {
        return view('invite/cycle');
    }
    //end formation


    // etudiant
    public function studentscreen() {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        return view('etudiant/studentscreen', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }

    public function demandescreen() {
        return view('etudiant/demandescreen');
    }
    public function demandescreendelegue() {
        return view('delegue/demandescreen');
    }
    public function annonces() {
        return view('etudiant/annonces');
    }
    public function emplois() {
        $id = Auth::id();
        // $nom = Auth::user()->nom; 
        // $prenom = Auth::user()->prenom;
      
        return view('etudiant/emplois', [
            'id' => $id,
      
        ]);
    }
    //prof
    public function prof() {
        return view('prof/prof');
    }
    //admin
    public function admin() {
        return view('admin/admin');
    }

   
    
}
