<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    //

    function index(){
        //echo 'Hello word ; index de controller';
        $enseignants = Enseignant::all();

        return view('enseignants.index', ['enseignants'=>$enseignants]);
    }

    function store(Request $request){
        $enseignant = new Enseignant();

        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->telephone = $request->telephone;
        $enseignant->adresse_email = $request->adresse_email;
        if ($enseignant->save()){
            // return redirect()->back();
            return redirect()->route('enseignant.index');
        }

    }

    function edit($id){

        return view('enseignants.inscription',
            [
                'enseignant'=>Enseignant::find($id),
                //'enseignants' =>Enseignant::all()

        ]);
    }

    function update(Request $request, $id){
        $enseignant = Enseignant::find($id);

        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->telephone = $request->telephone;
        $enseignant->adresse_email = $request->adresse_email;

        if ($enseignant->save()){
            return redirect()->route('enseignant.index');
        }

    }

    function delete($id){
        Enseignant::destroy($id);
        return redirect()->back();
    }

}
