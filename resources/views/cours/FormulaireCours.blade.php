@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($cour)? "Modification d'un Cours" : "Ajout d'un nouveau cours"}}
        </h1>
        <a href="{{route('cours.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($cours)? 'Formulaire de modification du cours' : "Formulaire d'ajout "}}
            </h5>
            <div class="card-body">
                <form action="{{isset($cours)? route('cours.update',['id'=>$cours->id]) : route('cours.store')}}"
                      method="post">
                    @csrf
                    @if(isset($cours))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom du cours</label>
                        <input name="nom" value="{{$cours->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Durée du cours</label>
                        <input name="duree" value="{{$cours->duree??''}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Durée">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Identifiant de l'enseignant</label>
                        <input name="enseignants_id" value="{{$cours->enseignants_id??''}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Identifiant de l'enseignant">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="ENREGISTRER">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
