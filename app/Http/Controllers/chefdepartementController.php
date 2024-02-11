<?php

namespace App\Http\Controllers;


use App\Models\annonces;
use App\Models\emplois;

use Illuminate\Http\Request;
use App\Models\ChefDepartement;
use Illuminate\Support\Facades\Auth;

class chefdepartementController extends Controller
{
    public function dashbord()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        // Add logic for the etudiant dashboard
        return view('chefdepartement.chefdepartement_dashbord', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }
    public function annonces($id){
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        $email = auth::user()->email;
        $annonces = annonces::where('creator', $email)->get();
        return view('chefdepartement.chefdepartement_annonces', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'annonces' => $annonces,
        ]);
    }

    public function emplois(){

        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
      
        return view('chefdepartement.gereremploi', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
        ]);
       }



    // affichage de formulaire d'annonces
    public function show()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
         $prenom = Auth::user()->prenom; 
        return view('chefdepartement.createannonces', compact('id', 'nom', 'prenom'));
    }

    //store la formulaire
    public function store(Request $request)
    {
        
        if (Auth::guard('departement')->check()) {
            
            $CDemail = Auth::guard('departement')->user()->email;

            
            $form = $request->validate([
                'type' => 'required',
                'classe' => 'required',
                'description' => 'required',
            ]);
            $form['creator'] = $CDemail;
           
         
          
            
            $annonce = new Annonces($form);

            
            $annonce->save();
            return redirect('/chefdepartement/annonces');
            
        } else {
            
            return redirect()->back()->withInput()->withErrors(['auth' => 'Authentication failed.']);
        }
    }

       // Méthode pour afficher le formulaire de modification
       public function modifier($id)
       {
           // Fetch the annonce based on the id
           $annonce = Annonces::findOrFail($id);
   
           
           $creator = $annonce->creator;
   
           
           $chefdepartement = ChefDepartement::where('email', $creator)->firstOrFail();
   
           // Extract the name and prenom
           $nom = $chefdepartement->nom;
           $prenom = $chefdepartement->prenom;
   
           return view('chefdepartement.modifierannonces', compact('id', 'annonce', 'nom', 'prenom'));
       }


        // Méthode pour traiter le formulaire de modification
    public function update(Request $request, $id)
    {
        // Fetch the annonce based on the id
        $annonce = Annonces::findOrFail($id);

        // Fetch the professor's information from the database based on the email
        $chefdepartement = ChefDepartement::where('email', $annonce->creator)->firstOrFail();

        // Extract the name and prenom
        $nom = $chefdepartement->nom;
        $prenom = $chefdepartement->prenom;

        // Mise à jour des données de l'annonce
        $annonce->update([
            'type' => $request->input('type'),
            'classe' => $request->input('classe'),
            'description' => $request->input('description'),
        ]);

        // Redirection vers la page des annonces
        return redirect()->route('chefdepartement.annonces', [
            'id' => $chefdepartement->id, // Assuming you want to use the professor's ID
            'nom' => $nom,
            'prenom' => $prenom,
        ]);
    }


        //supprimer :
        public function supprimer(annonces $annonce)
        {
            $annonce->delete();
            return redirect('/chefdepartement/annonces')->with('message', 'deleted successfully');
        }


        //emplois 
        public function storeemplois(Request $request)
        {
            $email=Auth::user()->email;
            $planning = new emplois([
                'localite' => $request->input('localite'),
                'email'=>$email, 
                'jour' => $request->input('jour'),
                'heure_debut' => $request->input('heure_debut'),
                'heure_fin' => $request->input('heure_fin'),
                'module' => $request->input('module'),
                'activite' => $request->input('activite'),
            ]);
        
            $planning->save();
            return redirect('/chefdepartement/emplois');
           
        }
        
          public function showemplois(){
            $email=Auth::user()->email;
            $id = Auth::id();
            $nom = Auth::user()->nom; 
            $prenom = Auth::user()->prenom; 
            $emplois = emplois::where('email', $email)->get();
                return view('chefdepartement.voiremplois', compact('emplois' ,'id' ,'nom','prenom'));
        }
        

}
