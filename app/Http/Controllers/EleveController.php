<?php

namespace App\Http\Controllers;

use  App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    function index(){
        //echo 'Hello word ; index de controller';
        $eleve = Eleve::all();

        return view('eleves.index', ['eleves'=>$eleve]);
    }

    function store(Request $request){
        $eleve = new Eleve();

        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->date_naissance = $request->date_naissance;
        $eleve->adresse = $request->adresse;
        $eleve->niveau_scolaire = $request->niveau_scolaire;
        if ($eleve->save()){
            // return redirect()->back();
            return redirect()->route('eleves.index');
        }

    }

    // function edit($id){

    //     return view('eleves.inscription',
    //         [
    //             'eleves'=>Eleve::find($id),
    //     ]);
    // }

    public function edit($id)
    {
        // Assuming you're using Eloquent to fetch the Eleve record by ID
        $eleves = Eleve::find($id);

        // Pass the $eleves variable to the view
        //return view('eleves.inscription', compact('eleves'));
        return view('eleves.FormulaireEleve', compact('eleves'));
    }

    function update(Request $request, $id){
        $eleve = Eleve::find($id);

        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->date_naissance = $request->date_naissance;
        $eleve->adresse = $request->adresse;
        $eleve->niveau_scolaire = $request->niveau_scolaire;

        if ($eleve->save()){
            return redirect()->route('eleves.index');
        }

    }

    function delete($id){
        Eleve::destroy($id);
        return redirect()->back();
    }
}
