<?php
namespace App\Http\Controllers;
use App\Models\prof;
use App\Models\Annonces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnoncesController extends Controller
{
    public function show($id, $nom, $prenom)
    {
        
        return view('annonces.create', compact('id', 'nom', 'prenom'));
    }

    

    public function store(Request $request)
    {
        
        if (Auth::guard('prof')->check()) {
            
            $profId = Auth::guard('prof')->user()->email;

            
            $form = $request->validate([
                'type' => 'required',
                'classe' => 'required',
                'description' => 'required',
            ]);

            
            $form['creator'] = $profId;
           
         

            
            $annonce = new Annonces($form);

            
            $annonce->save();

            return redirect('/prof/prof_annonces');
            
        } else {
            
            return redirect()->back()->withInput()->withErrors(['auth' => 'Authentication failed.']);
        }
    }

    //supprimer :
    public function supprimer(annonces $annonce)
    {
        $annonce->delete();
        return redirect('/prof/prof_annonces')->with('message', 'deleted successfully');
    }

    
   
    public function modifier($id)
    {
       
        $annonce = Annonces::findOrFail($id);

        
        $creator = $annonce->creator;

        
        $professor = prof::where('email', $creator)->firstOrFail();

       
        $nom = $professor->nom;
        $prenom = $professor->prenom;

        return view('annonces.modifier_annonces', compact('id', 'annonce', 'nom', 'prenom'));
    }


   
    public function update(Request $request, $id)
    {
        
        $annonce = Annonces::findOrFail($id);

        
        $professor = prof::where('email', $annonce->creator)->firstOrFail();

        
        $nom = $professor->nom;
        $prenom = $professor->prenom;

        
        $annonce->update([
            'type' => $request->input('type'),
            'classe' => $request->input('classe'),
            'description' => $request->input('description'),
        ]);

        
        return redirect()->route('prof.prof_annonces', [
            'id' => $professor->id, 
            'nom' => $nom,
            'prenom' => $prenom,
        ]);
    }


    // partie de chef filiere

    public function showCF()
    {
        $id = Auth::id();
        $nom = Auth::user()->nom; 
        $prenom = Auth::user()->prenom; 
        return view('annonces.ChefFiliere_create', compact('id', 'nom', 'prenom'));
    }

}