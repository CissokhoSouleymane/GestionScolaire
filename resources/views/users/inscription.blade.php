@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($user)? "Modification d'un  user" : "Création d'un nouveau user"}}
        </h1>
        <a href="{{route('user.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($user)? "Modification d'un Utilisateur" : "Formulaire d'inscription Utilisateur"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($user)? route('user.update',['id'=>$user->id]) : route('user.store')}}"
                      method="post">
                    @csrf
                    @if(isset($user))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom </label>
                        <input name="nom" value="{{$user->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom de l'utilisateur">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                        <input name="prenom" value="{{$user->prenom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prenom Utilisateur">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Login</label>
                        <input name="login" value="{{$user->login??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom utilisateur">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                        <input name="password" value="{{$user->password??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="mot de passe">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
