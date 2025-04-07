<?php

namespace App\Http\Controllers;

use App\Models\etudiants;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function ajouterEtudiant(){
        return view('etudiants.ajoutetudiant');
    }

     // Ajouter un étudiant dns la base
     public function ajout(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'filiere' => 'required',
        ]);

        $etudiant = new etudiants();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->filiere = $request->filiere;
        $etudiant->save();
        return redirect("/etudiant")->with('statut','Etudiant ajouté avec succès');
    }

    // Supprimer un étudiant de la base de données 
    public function supprimer($id){
        $etudiant = etudiants::find($id);
        $etudiant->delete();
        return redirect("/dashboard")->with('statut','Etudiant supprimé avec succès');
    }

    // Récupère et affiche dans le formulaire les informations de l'étudiant sur lequel les modifications seront faites
    public function modifier($id){
        $student = etudiants::find($id);
        return view('etudiants.modifieretudiant', compact('student'));
    }

    // Modification des information de l'étudiant
    public function update(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'filiere' => 'required',
        ]);

        $etudiant = etudiants::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->filiere = $request->filiere;
        $etudiant->update();
        return redirect("/dashboard")->with('statut','Modification de l\'étudiant faite avec succès');
    }
}
