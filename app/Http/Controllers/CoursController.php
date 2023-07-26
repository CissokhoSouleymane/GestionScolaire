<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //
    function index(){
//        echo 'Hello World';
        $cours = Cours::all();
//        $profiles_non_consultant =
//            $profiles->where('nom','!=', 'consultant');
//        dd(
//            $profiles_non_consultant,
//            $profiles->count()
//        );

        return view('cours.index', ['cours'=>$cours]);
    }

    function  store(Request $request){
        $cours = new Cours();
        $cours->nom = $request->nom;
        $cours->date = $request->date;
        $cours->heure   = $request->heure;
        $cours->duree = $request->duree;
        $cours->enseignants_id = $request->enseignants_id;
        $cours->matiere_id = $request->matiere_id;

        if ($cours->save()){
            return redirect()->back();
        }
    }

    function delete($id){
//        $profile = Profile::find($id);
//        $profile->delete();
        Cours::destroy($id);
        return redirect()->back();
    }

    function edit($id){

        return view('cours.index',
            [
                'cours_edit'=>cours::find($id),
                'cours_all' => cours::all()
            ]
        );
    }

    function update(Request $request, $id){
//        dd($request->all(),$id);
        $cours = Cours::find($id);
        $cours->nom = $request->nom;
        $cours->date = $request->date;
        $cours->heure = $request->heure;
        $cours->duree = $request->duree;
        $cours->enseignants_id = $request->enseignants_id;
        $cours->matiere_id = $request->matiere_id;
        if ($cours->save()){
            return redirect()->route('cours.index');
        }

    }
}
