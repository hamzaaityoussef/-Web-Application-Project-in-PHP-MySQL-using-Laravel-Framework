<?php
namespace App\Http\Controllers;

use App\Models\Annonces;
use App\Models\RepondAuDemande;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function dashbord()
    { 
        return view('etudiant.studentscreen');
    }
    public function dashbord2()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        
        return view('/etudiant/studentscreen', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom
        ]); 
    } 
    public function dashborddelegue()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        return view('delegue.studentscreen', [
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom
        ]); // Replace 'etudiant.dashboard' with your actual view name
    }

    

    public function viewreponsedemande()
    {
        $email = Auth::user()->email;
        $reponse = RepondAuDemande::where('to', $email)->get();

        return view('etudiant.demandescreen', ['reponse' => $reponse]);
    }


    public function viewreponsedemandedelegue()
    {
        $email = Auth::user()->email;
        $reponse = RepondAuDemande::where('to', $email)->get();

        return view('delegue/demandescreen', ['reponse' => $reponse]);
    }

    public function annonces()
    {
        $classe = Auth::user()->classe;
        $annonces = Annonces::where('classe', $classe)->get();
        return view('etudiant.annonces', ['annonces' => $annonces]);
    }
    public function annoncesdelegue()
    {
        $classe = Auth::user()->classe;
        $annonces = Annonces::where('classe', $classe)->get();
        return view('delegue.annonces', ['annonces' => $annonces]);
    }

    public function delegue()
    {
            return view('delegue/delegue');
    }
}



    // public function store(Request $request)
    // {
    //     // Check if there's an authenticated professor
    //     if (Auth::guard('dlg')->check()) {
    //         // Get the authenticated professor's email
    //         $profId = Auth::guard('dlg')->user()->email;

    //         // Validation that the fields are not empty
    //         $form = $request->validate([
    //             'type' => 'required',
    //             'classe' => 'required',
    //             'description' => 'required',
    //         ]);

    //         // Set the id_prof with the authenticated professor's ID
    //         $form['creator'] = $profId;
           
         

    //         // Create a new instance of the model and set the attributes
    //         $annonce = new Annonces($form);

    //         // Save the model to the database
    //         $annonce->save();

    //         return redirect('/prof/prof_annonces');
    //         // return view('prof.prof_welcome', compact('id', 'nom', 'prenom'));
    //     } else {
    //         // Handle the case when there's no authenticated professor
    //         return redirect()->back()->withInput()->withErrors(['auth' => 'Authentication failed.']);
    //     }
    // }

   


