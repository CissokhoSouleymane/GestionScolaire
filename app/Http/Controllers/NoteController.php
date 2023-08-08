<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Matiere;

class NoteController extends Controller
{
    function index()
    {
        $notes = Note::all();

        $inscriptionsWithEleveName = [];

        foreach($notes as $note)
        {
            $eleve = Eleve::find($note->eleves_id);
            $matiere = Matiere::find($note->matiere_id);

            if($eleve && $matiere)
            {
                $inscriptionWithEleveName = 
                [
                    'note' => $note,
                    'eleve_nom' => $eleve->nom,
                    'eleve_prenom' =>$eleve->prenom,
                    'matiere_nom'=>$matiere->nom,
                ];

                $inscriptionsWithEleveName[] = $inscriptionWithEleveName;
            }
        } 

        return view('notes.index', ['notes' => $inscriptionsWithEleveName]);

    }

    function  store(Request $request)
    {
        $note = new Note();

        $note->eleves_id = $request->eleves_id;
        $note->matiere_id = $request->matiere_id;
        $note->valeur = $request->valeur;

        if ($note->save())
        {
            return redirect()->route('notes.index');
        }
    }

    function delete($id)
    {
        Note::destroy($id);
        return redirect()->back();
    }

    function edit($id){

        return view('notes.FormulaireNote',
            [
                'note'=>Note::find($id),
                'eleves' => Eleve::all(),
                'matiere'=>Matiere::all(),
            ]
        );
    }

    function update(Request $request, $id)
    {
        $note = Note::find($id);

        $note->eleves_id = $request->eleves_id;
        $note->matiere_id = $request->matiere_id;
        $note->valeur = $request->valeur;

        if ($note->save())
        {
            return redirect()->route('notes.index');
        }

    }

    // Additional functions
        function inscription()
        {
            $eleves = Eleve::all();
            $matieres =Matiere::all();
            return view('notes.FormulaireNote',['eleves'=>$eleves,'matieres'=>$matieres]);
        }

}
