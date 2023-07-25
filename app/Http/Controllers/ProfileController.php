<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function index(){
//        echo 'Hello World';
        $profiles = Profile::all();
//        $profiles_non_consultant =
//            $profiles->where('nom','!=', 'consultant');
//        dd(
//            $profiles_non_consultant,
//            $profiles->count()
//        );

        return view('profiles.index', ['profiles'=>$profiles]);
    }

    function  store(Request $request){
        $profile = new Profile();
        $profile->nom = $request->nom;
        $profile->description = $request->description;
        if ($profile->save()){
            return redirect()->back();
        }
    }

    function delete($id){
//        $profile = Profile::find($id);
//        $profile->delete();
        Profile::destroy($id);
        return redirect()->back();
    }

    function edit($id){

        return view('profiles.index',
            [
                'profile'=>Profile::find($id),
                'profiles' => Profile::all()
            ]
        );
    }

    function update(Request $request, $id){
//        dd($request->all(),$id);
        $profile = Profile::find($id);
        $profile->nom = $request->nom;
        $profile->description = $request->description;
        if ($profile->save()){
            return redirect()->route('profile.index');
        }

    }
}
