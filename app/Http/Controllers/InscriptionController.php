<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    //

    function index(){

        $inscriptions = Inscription::all();

        return view('inscriptions.index', ['inscriptions'=>$inscriptions]);
    }

    function store(Request $request){
        $inscription = new Inscription();

        $inscription->date = $request->date;
        $inscription->eleves_id = $request->eleves_id;
        $inscription->classes_id = $request->classes_id;

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

            ]);
    }

    function update(Request $request, $id){
        $inscription = Inscription::find($id);

        $inscription->date = $request->date;
        $inscription->eleves_id = $request->eleves_id;
        $inscription->classes_id = $request->classes_id;


        if ($inscription->save()){
            return redirect()->route('inscription.index');
        }

    }

    function delete($id){
        Inscription::destroy($id);
        return redirect()->back();
    }

}
