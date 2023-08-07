<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    //

    /*function index(){

        $inscriptions = Inscription::all();
        $id = $inscriptions->eleves_id;
        $eleves = Eleve::where('id',$id)->first();
       // $id = Inscription::find($eleves_id);


        return view('inscriptions.index', ['inscriptions'=>$inscriptions,'eleves'=>$eleves]);
    }
    */
    function index() {
        // Récupérer toutes les inscriptions
        $inscriptions = Inscription::all();


        // Créer un tableau pour stocker les inscriptions avec le nom de l'élève associé
        $inscriptionsWithEleveName = [];

        // Parcourir les inscriptions pour récupérer le nom de l'élève associé
        foreach ($inscriptions as $inscription) {
            // Récupérer l'élève associé à l'inscription
            $eleve = Eleve::find($inscription->eleves_id);
            $classe = Classe::find($inscription->classes_id);

            // Vérifier si l'élève existe
            if ($eleve && $classe) {
                // Ajouter une nouvelle entrée au tableau avec les informations d'inscription et le nom de l'élève
                $inscriptionWithEleveName = [
                    'inscription' => $inscription,
                    'eleve_nom' => $eleve->nom, // Remplacez 'nom' par la colonne qui contient le nom de l'élève
                    'eleve_prenom' =>$eleve->prenom,
                    'classe_nom'=>$classe->nom,

                ];



                // Ajouter l'entrée au tableau des inscriptions avec le nom de l'élève
                $inscriptionsWithEleveName[] = $inscriptionWithEleveName;

            }
        }

        //dd($inscriptionsWithEleveName);

        // Retourner la vue avec les inscriptions et les noms des élèves
        return view('inscriptions.index', ['inscriptions' => $inscriptionsWithEleveName]);
            // return $inscriptionWithEleveName;
    }



    /* function index()
     {
         $inscriptions = DB::table('inscriptions')
             ->join('eleves', 'inscriptions.eleves_id', '=', 'eleves.id')
             ->select('inscriptions.*', 'eleves.nom as eleve_nom')
             ->get();

         return view('inscriptions.index', ['inscriptions' => $inscriptions]);
     }
    */


    function getNameById($id=1){

        $eleves = Eleve::where('id',$id)->first();
        //return view('inscriptions.index', ['eleves'=>$eleves->nom]);
        // return $eleve->prenom;

        //  $sql = "SELECT concat(nom , ' ',prenom) AS nom
        //           FROM eleve e, inscription i
        //          WHERE e.id = i.eleves_id AND e.id = ?";


    }

    function store(Request $request){
        $inscription = new Inscription();

        $inscription->date = $request->date;
        $inscription->eleves_id = $request->eleves_id;
        $inscription->classes_id = $request->classes_id;

       // $eleves = Eleve::all();

        if ($inscription->save()){
            // return redirect()->back();
            return redirect()->route('inscription.index');
        }

    }

    function edit($id){

        return view('inscriptions.inscription',
            [
                'inscription'=>Inscription::find($id),
                //'enseignants' =>Enseignant::all()

                'eleves' => Eleve::all(),
                'classes'=>Classe::all(),

            ]);
    }

    function update(Request $request, $id){
        $inscription = Inscription::find($id);

        $inscription->date = $request->date;
        $inscription->eleves_id = $request->eleves_id;
        $inscription->classes_id = $request->classes_id;
        //test();

        if ($inscription->save()){
            return redirect()->route('inscription.index');
        }

    }

    function delete($id){
        Inscription::destroy($id);
        return redirect()->back();
    }

    function inscription(){
        $eleves = Eleve::all();
        $classes =Classe::all();
        return view('inscriptions.inscription',['eleves'=>$eleves,'classes'=>$classes]);
    }



}
