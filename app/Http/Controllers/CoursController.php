<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //
    function index()
    {
        $cours = Cours::all();

        return view('cours.index', ['cours'=>$cours]);
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
                // 'cours_all' => cours::all()
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
}
