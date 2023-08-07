<?php

namespace App\Http\Controllers;


use App\Models\Classe;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    //

    function index(){

        $matieres = Matiere::all();


        // Créer un tableau pour stocker les inscriptions avec le nom de l'élève associé
        $matieresWithEleveName = [];

        // Parcourir les inscriptions pour récupérer le nom de l'élève associé
        foreach ($matieres as $matiere) {
            // Récupérer l'élève associé à l'inscription
            $enseignant = Enseignant::find($matiere->enseignants_id);
            $classe = Classe::find($matiere->classes_id);

            // Vérifier si l'élève existe
            if ($enseignant && $classe) {
                // Ajouter une nouvelle entrée au tableau avec les informations d'inscription et le nom de l'élève
                $matiereWithEleveName = [
                    'matiere' => $matiere,
                    'enseignant_nom' => $enseignant->nom, // Remplacez 'nom' par la colonne qui contient le nom de l'élève
                    'enseignant_prenom' =>$enseignant->prenom,
                    'classe_nom'=>$classe->nom,

                ];



                // Ajouter l'entrée au tableau des inscriptions avec le nom de l'élève
                $matieresWithEleveName[] = $matiereWithEleveName;

            }
        }

        return view('matieres.index', ['matieres' => $matieresWithEleveName]);
    }

    function store(Request $request){
        $matiere = new Matiere();

        $matiere->nom = $request->nom;
        $matiere->coef = $request->coef;
        $matiere->classes_id = $request->classes_id;
        $matiere->enseignants_id = $request->enseignants_id;
        if ($matiere->save()){
            // return redirect()->back();
            return redirect()->route('matiere.index');
        }

    }

    function edit($id){

        return view('matieres.inscription',
            [
                'matiere'=>Matiere::find($id),
                //'enseignants' =>Enseignant::all()

            ]);
    }

    function update(Request $request, $id){
        $matiere = Matiere::find($id);

        $matiere->nom = $request->nom;
        $matiere->coef = $request->coef;
        $matiere->classes_id = $request->classes_id;
        $matiere->enseignants_id = $request->enseignants_id;

        if ($matiere->save()){
            return redirect()->route('matiere.index');
        }

    }

    function delete($id){
        Matiere::destroy($id);
        return redirect()->back();
    }




}
