<?php

namespace App\Http\Controllers;

use App\Models\demande;
use App\Models\RepondAuDemande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function create()
    {
        return view('etudiant.demandescreen');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'type' => 'required',
            'to' => 'required',
            'message' => 'required',
        ]);
    
        
        if (Auth::check()) {
            
            $user = Auth::user();
            $from = $user->email;
            $etudiantId = $user->id;
    
            
            Demande::create([
                'type' => $request->input('type'),
                'from' => $from,
                'to' => $request->input('to'),
                'message' => $request->input('message'),
                'etudiant_id' => $etudiantId, // Set the etudiant_id
            ]);
    
            
            return redirect('/demande')->with('success', 'Demande envoyée avec succès!');
        } else {
            
            return redirect('/login')->with('error', 'Veuillez vous connecter avant de soumettre une demande.');
        }
    }



    public function storedelegue(Request $request)
    {
        // Validate the form data
        $request->validate([
            'type' => 'required',
            'to' => 'required',
            'message' => 'required',
        ]);
    
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user's email and id
            $user = Auth::user();
            $from = $user->email;
            $etudiantId = $user->id;
    
            // Create a new Demande model instance and save it to the database
            Demande::create([
                'type' => $request->input('type'),
                'from' => $from,
                'to' => $request->input('to'),
                'message' => $request->input('message'),
                'etudiant_id' => $etudiantId, // Set the etudiant_id
            ]);
    
            // Redirect back with a success message
            return redirect('demande/delegue')->with('success', 'Demande envoyée avec succès!');
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login)
            return redirect('/login')->with('error', 'Veuillez vous connecter avant de soumettre une demande.');
        }
    }






    
    public function repondaudemande(Request $request){
        // Validate the form data
        $request->validate([
            'type' => 'required',
            'to' => 'required',
            'message' => 'required',
        ]);
    
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $from = $user->email;
            $profId = $user->id;
    
            
            RepondAuDemande::create([
                'type' => $request->input('type'),
                'from' => $from,
                'to' => $request->input('to'),
                'message' => $request->input('message'),
                'id_prof' => $profId, 
            ]);
    
            return redirect('/prof/prof_demandes')->with('success', 'reponse envoyée avec succès!');
        } else {
            return redirect('/login')->with('error', 'Veuillez vous connecter avant de soumettre une demande.');
        }
    }



    
}
