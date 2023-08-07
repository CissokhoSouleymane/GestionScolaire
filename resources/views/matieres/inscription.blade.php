@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($matiere)? "Modification d'une  Matiere" : "Création d'une nouvelle Matiere"}}
        </h1>
        <a href="{{route('matiere.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($matiere)? 'Modification de la Matière' : "Formulaire d'inscription Matieres"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($matiere)? route('matiere.update',['id'=>$matiere->id]) : route('matiere.store')}}"
                      method="post">
                    @csrf
                    @if(isset($matiere))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom </label>
                        <input name="nom" value="{{$matiere->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom de la matière">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Coef</label>
                        <input name="coef" value="{{$matiere->coef??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="coef">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Classe</label>
                        <input name="classes_id" value="{{$matiere->classes_id??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="classe">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enseignant</label>
                        <input name="enseignants_id" value="{{$matiere->enseignants_id??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom de l'enseignant">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
