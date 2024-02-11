<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Annonces;
use App\Models\cheffiliere;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use App\Models\RepondAuDemande;
use Illuminate\Support\Facades\Auth;

class ChefFiliereController extends Controller
{
    public function ChefFiliere_welcome()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        return view('ChefFiliere.welcome', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }

    public function ChefFiliere_annonces()
    {
        $email = Auth::user()->email;
        $annonces = Annonces::where('creator', $email)->get();
        
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        
        return view('ChefFiliere.annonces', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'annonces' => $annonces,
        ]);
    }

    public function ChefFiliere_demandes()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        $email = Auth::user()->email; 
        $demande = Demande::where('to', $email)->get();
   
        return view('cheffiliere\demande', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'demande' => $demande,
        ]);
    }



    public function CFstore(Request $request)
    {
        // Check if there's an authenticated professor
        if (Auth::guard('filier')->check()) {
            // Get the authenticated professor's email
            $ChefFiliereId = Auth::guard('filier')->user()->email;
            $filiere=Auth::guard('filier')->user()->filiere;
            // Validation that the fields are not empty
            $form = $request->validate([
                'type' => 'required',
                'description' => 'required',
            ]);

            $form['classe']=$filiere;
            $form['creator'] = $ChefFiliereId;
            // Create a new instance of the model and set the attributes
            $annonce = new Annonces($form);

            // Save the model to the database
            $annonce->save();

            return redirect('/annonces/ChefFiliere_create');
        }else {
            // Handle the case when there's no authenticated professor
            return redirect()->back()->withInput()->withErrors(['auth' => 'Authentication failed.']);
        }
    }


    public function repondaudemande(Request $request){
        // Validate the form data
        $request->validate([
            'type' => 'required',
            'to' => 'required',
            'message' => 'required',
        ]);
        if (Auth::check()) {
            // Retrieve the authenticated user's email and id
            $user = Auth::user();
            $from = $user->email;
            $profId = $user->id;
    
            // Create a new Demande model instance and save it to the database
            RepondAuDemande::create([
                'type' => $request->input('type'),
                'from' => $from,
                'to' => $request->input('to'),
                'message' => $request->input('message'),
                'id_prof' => $profId, // Set the id_prof
            ]);
    
            // Redirect back with a success message
            return redirect('/ChefFiliere/demandes')->with('success', 'reponse envoyée avec succès!');
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login)
            return redirect('/login')->with('error', 'Veuillez vous connecter avant de soumettre une demande.');
        }
    }



    //supprimer :
    public function supprimer(annonces $annonce)
    {
        
        $annonce->delete();
        return redirect('/ChefFiliere/annonces')->with('message', 'deleted successfully');
    }


    
   // Méthode pour afficher le formulaire de modification
    public function modifier($id)
    {
        // Fetch the annonce based on the id
        $annonce = Annonces::findOrFail($id);

        // Get the creator (professor's email) from the annonce
        $creator = $annonce->creator;

        // Fetch the professor's information from the database based on the email
        $CF = cheffiliere::where('email', $creator)->firstOrFail();

        // Extract the name and prenom
        $nom = $CF->nom;
        $prenom = $CF->prenom;

        return view('annonces.modifier_annoncesCF', compact('id', 'annonce', 'nom', 'prenom'));
    }


   // Méthode pour traiter le formulaire de modification
    public function update(Request $request, $id)
    {
        // Fetch the annonce based on the id
        $annonce = Annonces::findOrFail($id);

        // Fetch the professor's information from the database based on the email
        $professor = cheffiliere::where('email', $annonce->creator)->firstOrFail();
        $classe=Auth::guard('filier')->user()->filiere;

        // Extract the name and prenom
        $nom = $professor->nom;
        $prenom = $professor->prenom;

        // Mise à jour des données de l'annonce
        $annonce->update([
            'type' => $request->input('type'),
            'classe' => $classe,
            'description' => $request->input('description'),
        ]);

        // Redirection vers la page des annonces
        return redirect()->route('ChefFiliere.annonces', [
            'id' => $professor->id, // Assuming you want to use the professor's ID
            'nom' => $nom,
            'prenom' => $prenom,
        ]);
    }
    public function reclamations(){

        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        $classe = Auth::user()->filiere;
        $reclamation = Reclamation::where('classe', $classe)->get();
        return view('ChefFiliere.reclamations', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'reclamation' => $reclamation,
        ]);
    }
}


//     //supprimer :
//     public function supprimer(annonces $annonce)
//     {
//         $annonce->delete();
//         return redirect('/prof/prof_annonces')->with('message', 'deleted successfully');
//     }

    
//    // Méthode pour afficher le formulaire de modification
//     public function modifier($id)
//     {
//         // Fetch the annonce based on the id
//         $annonce = Annonces::findOrFail($id);

//         // Get the creator (professor's email) from the annonce
//         $creator = $annonce->creator;

//         // Fetch the professor's information from the database based on the email
//         $professor = prof::where('email', $creator)->firstOrFail();

//         // Extract the name and prenom
//         $nom = $professor->nom;
//         $prenom = $professor->prenom;

//         return view('annonces.modifier_annonces', compact('id', 'annonce', 'nom', 'prenom'));
//     }


//    // Méthode pour traiter le formulaire de modification
//     public function update(Request $request, $id)
//     {
//         // Fetch the annonce based on the id
//         $annonce = Annonces::findOrFail($id);

//         // Fetch the professor's information from the database based on the email
//         $professor = prof::where('email', $annonce->creator)->firstOrFail();

//         // Extract the name and prenom
//         $nom = $professor->nom;
//         $prenom = $professor->prenom;

//         // Mise à jour des données de l'annonce
//         $annonce->update([
//             'type' => $request->input('type'),
//             'classe' => $request->input('classe'),
//             'description' => $request->input('description'),
//         ]);

//         // Redirection vers la page des annonces
//         return redirect()->route('prof.prof_annonces', [
//             'id' => $professor->id, // Assuming you want to use the professor's ID
//             'nom' => $nom,
//             'prenom' => $prenom,
//         ]);
//     }

