<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function index(){
        //echo 'Hello word ; index de controller';
        $users = User::all();

        return view('users.index', ['users'=>$users]);
    }

    function store(Request $request){
        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->login = $request->login;
        $user->password = $request->password;
        if ($user->save()){
            // return redirect()->back();
            return redirect()->route('user.index');
        }

    }

    function edit($id){

        return view('users.inscription',
            [
                'user'=>User::find($id),
                //'enseignants' =>Enseignant::all()

            ]);
    }

    function update(Request $request, $id){
        $user = User::find($id);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->login = $request->login;
        $user->password = $request->password;

        if ($user->save()){
            return redirect()->route('user.index');
        }


    }

        function delete($id){
            User::destroy($id);
            return redirect()->back();
        }






}
