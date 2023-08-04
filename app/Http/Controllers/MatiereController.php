<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    //

    function index(){

        $matieres = Matiere::all();

        return view('matieres.index', ['matieres'=>$matieres]);
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
