<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    function index()
    {
        $note = Note::all();

        return view('notes.index', ['notes'=>$note]);
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


}
