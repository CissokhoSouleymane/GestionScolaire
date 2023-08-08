@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($enseignant)? "Modification données Enseignant" : "Création d'un nouvel Enseignant"}}
        </h1>
        <a href="{{route('enseignant.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($enseignant)? 'Formulaire de Modification Enseignant' : "Formulaire d'inscription Enseignants"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($enseignant)? route('enseignant.update',['id'=>$enseignant->id]) : route('enseignant.store')}}"
                      method="post">
                    @csrf
                    @if(isset($enseignant))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom de l'enseignant</label>
                        <input name="nom" value="{{$enseignant->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prénom de l'enseignant</label>
                        <input name="prenom" value="{{$enseignant->prenom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
                        <input name="telephone" value="{{$enseignant->telephone??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="adresse_email" value="{{$enseignant->adresse_email??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
