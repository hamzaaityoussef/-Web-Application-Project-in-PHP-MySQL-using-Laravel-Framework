<?php

namespace App\Http\Controllers;

use App\Models\prof;
use App\Models\local;
use App\Models\Classe;
use App\Models\Module;
use App\Models\Classes;
use App\Models\emplois;
use App\Models\filiere;
use App\Models\ChefFiliere;
use App\Models\departement;
use App\Models\ModuleClasse;
use Illuminate\Http\Request;
use App\Models\chefdepartement;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function dashbord(){
    $id = Auth::id();
    $nom = Auth::user()->nom; 
    $prenom = Auth::user()->prenom; 
        
    return view('admin.home', [
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom
    ]);
   }
   public function emplois(){
      
    return view('admin.gereremploi');
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
        
      
          return redirect('/admin/emplois');
      }
    public function showemplois(){
        $email=Auth::user()->email;
        $emplois = emplois::where('email', $email)->get();
        return view('admin.voiremplois', compact('emplois'));
    }



   public function affectersalle(){
    $locals=local::all() ; 
    return view('admin.affectersalle' , compact('locals'));
    }
   

   
   
   
   

   public function storesalle(Request $request)
   {
       $request->validate([
           'salle' => 'required|string',
           'dep' => 'required|string',
       ]);
   
       Local::create([
           'nom' => $request->input('salle'),
           'departement' => $request->input('dep'),
       ]);
   
       
       return redirect()->route('admin.affectersalle', ['departement' => $request->input('dep')])
                      ->with('success', 'Salle ajoutée avec succès.');
   }
   

   public function departementPage($departement)
{
    $locals = Local::where('departement', $departement)->get();

    return view('admin.affectersalle', ['departement' => $departement, 'local' => $locals]);
}



public function modifierrole(){
    $prof= prof::all();
    $CF = cheffiliere::all();
    $CD = chefdepartement::all();
    return view('admin.modifierprof' , compact('prof', 'CF','CD'));
    }






   public function editProfessor($id)
{
    $professor = prof::find($id);
    return view('admin.edit_professor', compact('professor'));
}



public function updateProfessor(Request $request, $id)
{
    // Validation the request data
    $request->validate([
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string',
        'filiere' => 'required|string',
    ]);

    
    $professor = prof::find($id);

    
    if (str_ends_with($request->input('email'), '@filier.com')) {
        
        ChefFiliere::updateOrCreate(
            ['email' => $request->input('email')],
            [
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'password' => bcrypt($request->input('password')),
                'filiere' => $request->input('filiere'),
            ]
        );

        
        $professor->delete();
    } elseif (str_ends_with($request->input('email'), '@departement.com')) {
        
        ChefDepartement::updateOrCreate(
            ['email' => $request->input('email')],
            [
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'password' => bcrypt($request->input('password')),
                'departement' => $request->input('filiere'), 
            ]
        );

        
        $professor->delete();
    } else {
        
        $professor->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'module' => $request->input('filiere'),
            'password' => bcrypt($request->input('password')),
        ]);
    }

    
    return redirect()->route('admin.modifierrole')->with('success', 'Professor information updated successfully.');
}




public function editCheffiliere($id)
{
    $cheffiliere = ChefFiliere::find($id);
    return view('admin.edit_cheffiliere', compact('cheffiliere'));
}

public function updateCheffiliere(Request $request, $id)
{
    $cheffiliere = ChefFiliere::find($id);
    $cheffiliere->update([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        
    ]);

    return redirect()->route('admin.modifierrole')->with('success', 'Cheffiliere information updated successfully.');
}


public function editDepartement($id)
{
    $departement = chefdepartement::find($id);
    return view('admin.edit_departement', compact('departement'));
}

public function updateDepartement(Request $request, $id)
{
    $departement = chefdepartement::find($id);

    if (strpos($request->input('email'), '@departement.com') !== false) {
        $departement->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    } elseif (strpos($request->input('email'), '@prof.com') !== false) {
        prof::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'module' => $request->input('filiere'),
            'password' => bcrypt($request->input('password')),
        ]);
        $departement->delete();
    } elseif (strpos($request->input('email'), '@filier.com') !== false) {
        ChefFiliere::updateOrCreate(
            ['email' => $request->input('email')],
            [
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'password' => bcrypt($request->input('password')),
                'filiere' => $request->input('filiere'),
            ]
        );
        $departement->delete();
    }

    return redirect()->route('admin.modifierrole')->with('success', 'Departement information updated successfully.');
}






public function NVclasse()
{
    $modules = Module::with('classes')->get();

    return view('admin.NVclasse', compact('modules'));
}

//    public function showForm()
//    {
//        $modules = Module::all();
//        return view('class.registration', compact('modules'));
//    }

public function registerClass(Request $request)
{
    $request->validate([
        'class' => 'required|string',
        'modules' => 'required|array',
    ]);
    
    $class = Classes::create(['class_name' => $request->input('class')]);

    // Attach modules to the class
    $class->modules()->attach($request->input('modules'));

    return redirect()->route('register.class')->with('success', 'Class registered successfully.');
}



// ajouter modifier contenue

public function createFiliere()
    {
        return view('admin.nouveaufiliere');
    }


    public function storeFiliere(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new filiere
        filiere::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);


        return redirect()->back()->with('success', 'Filiere créée avec succès!');
    }

public function showModifierFiliereForm($id)
    {
        $filiere = filiere::findOrFail($id);
        return view('admin.modifierfiliere', compact('filiere'));
    }


    public function modifierFiliere(Request $request, $id)
    {
        $filiere = filiere::findOrFail($id);
        

        $request->validate([
            'description' => 'required|string',
        ]);

        
        $filiere->update([
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.changercontenue')->with('success', 'Filiere information updated successfully.');
    }

    public function changercontenue(){
        $filiere = filiere::all();
        return view('admin.changercontenuefiliere',compact('filiere'));
    }



}



