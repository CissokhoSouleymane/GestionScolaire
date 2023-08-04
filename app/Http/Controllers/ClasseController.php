<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //

    function index(){

        $classes = Classe::all();

        return view('classes.index', ['classes'=>$classes]);
    }

    function store(Request $request){
        $classe = new Classe();

        $classe->nom = $request->nom;

        if ($classe->save()){
            // return redirect()->back();
            return redirect()->route('classe.index');
        }

    }

    function edit($id){

        return view('classes.inscription',
            [
                'classe'=>Classe::find($id),
                //'enseignants' =>Enseignant::all()

            ]);
    }

    function update(Request $request, $id){
        $classe = Classe::find($id);

        $classe->nom = $request->nom;


        if ($classe->save()){
            return redirect()->route('classe.index');
        }

    }

    function delete($id){
        Classe::destroy($id);
        return redirect()->back();
    }

}
