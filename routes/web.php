<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ChefFiliereController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\chefdepartementController;






// Public routes
Route::get('/', [StaticController::class, 'welcome']);
Route::get('invite/login', [StaticController::class, 'login'])->name('invite.login');
Route::get('/invite/welcome', [staticController::class, 'afficherinwelcome'])->name('invite.welcome');

Route::get('/presentation',[StaticController::class,'presentation'] );
Route::get('/departements',[StaticController::class,'departements'] );
//formation routes
Route::get('/deust',[StaticController::class,'deust'] );
Route::get('/licence',[StaticController::class,'licence'] );
Route::get('/master',[StaticController::class,'master'] );
Route::get('/cycle',[StaticController::class,'cycle']);
//end



//etudiant
// Route::get('annonces', [StaticController::class, 'annonces']);
Route::get('emplois', [StaticController::class, 'emplois']);
// Route::get('delegue', [StaticController::class, 'delegue']);


Route::get('/annonces/create/{id}/{nom}/{prenom}', [AnnoncesController::class, 'show'])->name('annonces.create');
Route::get('/prof/prof_annonces', [AnnoncesController::class, 'store']);
//supprimer une annonce:
Route::delete('/annonces/{annonce}', [AnnoncesController::class, 'supprimer'])->name('annonces.supprimer');

// Route for displaying the modification form
Route::get('/annonces/{id}/modifier_annonces', [AnnoncesController::class, 'modifier'])->name('annonces.modifier');

// Route for handling the form submission
Route::put('/annonces/{id}', [AnnoncesController::class, 'update'])->name('annonces.update');



// Authentication routes
Route::get('/login', [AuthController::class, 'Authlogin'])->name('login');
Route::post('/login', [AuthController::class, 'AuthLogin'])->name('auth.login');
// Example named route for logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Dashboard routes
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
// });


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashbord', [AdminController::class, 'dashbord'])->name('admin.dashbord');
    //emplois 
    Route::get('/admin/emplois', [AdminController::class, 'emplois'])->name('admin.emplois');
     Route::post('/admin/emplois', [AdminController::class, 'storeemplois'])->name('admin.storeemplois');
     Route::get('/admin/voiremplois', [AdminController::class, 'showemplois'])->name('admin.voiremplois');

    Route::get('/admin/affectersalle', [AdminController::class, 'affectersalle'])->name('admin.affectersalle');
    //submit dakchi d salle
    
    Route::post('/admin/affecter', [AdminController::class, 'storesalle'])->name('submit');


// Department pages
Route::get('/departement/{departement}', [AdminController::class, 'departementPage']);


    Route::get('/admin/modifierrole', [AdminController::class, 'modifierrole'])->name('admin.modifierrole');

    Route::get('/admin/edit_professor/{id}', [AdminController::class, 'editProfessor'])->name('admin.edit_professor');
    Route::post('/admin/update_professor/{id}', [AdminController::class, 'updateProfessor'])->name('admin.update_professor');


    Route::get('/admin/edit_cheffiliere/{id}', [AdminController::class, 'editCheffiliere'])->name('admin.edit_cheffiliere');
    Route::post('/admin/update_cheffiliere/{id}', [AdminController::class, 'updateCheffiliere'])->name('admin.update_cheffiliere');


    Route::get('/admin/edit_departement/{id}', [AdminController::class, 'editDepartement'])->name('admin.edit_departement');
    Route::post('/admin/update_departement/{id}',  [AdminController::class, 'updateDepartement'])->name('admin.update_departement');


    Route::match(['get', 'post'],'/admin/nouveauclasse', [AdminController::class, 'NVclasse'])->name('admin.NVclasse');
    Route::get('/admin/changercontenue', [AdminController::class, 'changercontenue'])->name('admin.changercontenue');

    Route::post('/admin/nouveauclasse', [AdminController::class, 'registerClass'])->name('register.class');

    // ajouter modifier contenue:

    Route::get('/modifier-filiere/{id}', [AdminController::class, 'showModifierFiliereForm'])->name('modifierFiliere.show');

    Route::put('/modifier-filiere/{id}', [AdminController::class, 'modifierFiliere'])->name('modifierFiliere.update');
    // Route for showing the form to create a new filiere in the admin section
    Route::get('/admin/nouveaufiliere', [AdminController::class, 'createFiliere'])->name('admin.nouveaufiliere');

    // Route for storing the newly created filiere in the admin section
    Route::post('/admin/filiere', [AdminController::class, 'storeFiliere'])->name('admin.filiere.store');
});



Route::middleware(['auth:etudiant'])->group(function () {
    Route::get('/etudiant/studentscreen', [EtudiantController::class, 'dashbord2'])->name('etudiant.home');
 
    //etudiant
    // Route::get('etudiant', [StaticController::class, 'studentscreen'])->name('etudiant.studentscreen');
    Route::get('etudiant/delegue', [StaticController::class, 'studentscreen'])->name('etudiant.studentscreen');

    Route::get('etudiant/demande', [StaticController::class, 'demandescreen']);

    // Traiter les données du formulaire
    Route::post('/demande/store', [DemandeController::class, 'store']);

    Route::get('/annonces', [EtudiantController::class, 'annonces']);

    Route::get('demande', [EtudiantController::class, 'viewreponsedemande']);

});

Route::middleware(['auth:dlg'])->group(function () { 

    Route::get('/delegue/studentscreen', [EtudiantController::class, 'dashborddelegue'])->name('delegue.home');
    Route::get('demande/delegue', [StaticController::class, 'demandescreendelegue']);
     // Traiter les données du formulaire
     Route::post('/demande/storedelegue', [DemandeController::class, 'storedelegue']);

    Route::get('/annonces/delegue', [EtudiantController::class, 'annoncesdelegue']);
    Route::get('/signaler', [EtudiantController::class, 'delegue']);
    // Route::match(['get', 'post'],'/signaler', [ReclamationController::class, 'store']);
    Route::post('/signaler', [ReclamationController::class, 'store'])->name('reclamations.store');
    Route::get('delegue/demande', [EtudiantController::class, 'viewreponsedemandedelegue']);
});



Route::middleware(['auth:prof'])->group(function () {
    // Route::get('/prof/dashboard/{id}', [ProfController::class, 'dashboard'])->name('prof.dashboard');

    Route::get('/prof/dashbord', [ProfController::class, 'prof_welcome'])->name('prof.prof_welcome');
    Route::get('/prof/prof_annonces/{id}/{nom}/{prenom}', [ProfController::class, 'annonces'])->name('prof.prof_annonces');
    Route::get('/prof/prof_demandes', [ProfController::class, 'viewdemande'])->name('prof.prof_demandes');
    // Traiter les données du formulaire
    Route::post('/prof/prof_demandes', [DemandeController::class, 'repondaudemande']);
});





Route::middleware(['auth:filier'])->group(function () {
    Route::get('/ChefFiliere/welcome', [ChefFiliereController::class, 'ChefFiliere_welcome'])->name('ChefFiliere.welcome');
    

    Route::get('/ChefFiliere/annonces', [ChefFiliereController::class, 'CFstore'])->name('ChefFiliere_CFstore');

    Route::get('/ChefFiliere/annonces9090', [ChefFiliereController::class, 'ChefFiliere_annonces'])->name('ChefFiliere.annonces');
    
    Route::get('/ChefFiliere/demandes', [ChefFiliereController::class, 'ChefFiliere_demandes'])->name('ChefFiliere.demandes');
    Route::get('/annonces/ChefFiliere_create', [AnnoncesController::class, 'showCF'])->name('annonces.ChefFiliere_create');

    // Route::get('/ChefFiliere/demandess', [ChefFiliereController::class, 'repondaudemande']);

    //new 
    Route::delete('/ChefFiliere/annonces/{annonce}', [ChefFiliereController::class, 'supprimer'])->name('annonces.supprimerCF');
    Route::post('/ChefFiliere/repondredemandes', [ChefFiliereController::class, 'repondaudemande']); 
      // Route for displaying the modification form
      Route::get('/ChefFiliere/modifier-annonces/{id}', [ChefFiliereController::class, 'modifier'])->name('cheffiliere.modifierannonces');

      Route::put('/ChefFiliere/annonces/{id}', [ChefFiliereController::class, 'update'])->name('annonces.updateCF');
      Route::get('/ChefFiliere/reclamations',[ChefFiliereController::class, 'reclamations'])->name('ChefFiliere.reclamations');
  });










Route::middleware(['auth:departement'])->group(function () {
    // Route::get('/departement/dashboard', 'DepartementController@dashboard')->name('departement.dashboard');

    Route::get('/chefdepartement/dashbord', [chefdepartementController::class, 'dashbord'])->name('chefdepartement.dashbord');
    Route::get('/chefdepartement/annonces/{id}', [chefdepartementController::class, 'annonces'])->name('chefdepartement.annonces');
    Route::get('/chefdepartement/emplois', [chefdepartementController::class, 'emplois'])->name('chefdepartement.emplois');

    Route::get('/chefdepartement/create-annonces', [chefdepartementController::class, 'show'])->name('chefdepartement.createannonces');
    Route::get('/chefdepartement/annonces', [chefdepartementController::class, 'store']);
    // Route for displaying the modification form
    Route::get('/chefdepartement/modifier-annonces/{id}', [chefdepartementController::class, 'modifier'])->name('chefdepartement.modifierannonces');
    // Route for handling the form submission
    Route::put('/chefdepartement/annonces/{id}', [chefdepartementController::class, 'update'])->name('annonces.updateCD');

    //supprimer une annonce:
    Route::delete('/chefdepartement/annonces/{annonce}', [chefdepartementController::class, 'supprimer'])->name('annonces.supprimer');

    //emplois 

    Route::post('/chefdepartement/emplois', [chefdepartementController::class, 'storeemplois'])->name('chefdepartement.storeemplois');
    Route::get('/chefdepartement/voiremplois', [chefdepartementController::class, 'showemplois'])->name('chefdepartement.voiremplois');



});





