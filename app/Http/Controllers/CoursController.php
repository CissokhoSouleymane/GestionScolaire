<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //
    function index()
    {
        $cours = Cours::all();
        $inscripitionsWithEnseignantName = [];

        foreach ($cours as $cour) {
            $enseignants = Enseignant::find($cour->enseignants_id);

            if ($enseignants) 
            {
                $inscriptionWithEnseignantName = [
                    'cour' => $cour,
                    'enseignant_nom' => $enseignants->nom,
                    'enseignant_prenom' => $enseignants -> prenom,
                ];

                $inscripitionsWithEnseignantName[] = $inscriptionWithEnseignantName;
            }
        }

        return view('cours.index', ['cours' => $inscripitionsWithEnseignantName]);
    }

    function  store(Request $request)
    {
        $cours = new Cours();
        
        $cours->nom = $request->nom;
        $cours->duree = $request->duree;
        $cours->enseignants_id = $request->enseignants_id;

        if ($cours->save())
        {
            return redirect()->route('cours.index');
        }
    }

    function delete($id)
    {
        Cours::destroy($id);
        return redirect()->back();
    }

    function edit($id){

        return view('cours.FormulaireCours',
            [
                'cours'=>Cours::find($id),
                'enseignants' => Enseignant::all(),
            ]
        );
    }

    function update(Request $request, $id)
    {
        $cours = Cours::find($id);

        $cours->nom = $request->nom;
        $cours->duree = $request->duree;
        $cours->enseignants_id = $request->enseignants_id;

        if ($cours->save())
        {
            return redirect()->route('cours.index');
        }

    }

// Additional functions
    function inscription()
    {
        $enseignants = Enseignant::all();
        return view('cours.FormulaireCours',['enseignants'=>$enseignants]);
    }
}
