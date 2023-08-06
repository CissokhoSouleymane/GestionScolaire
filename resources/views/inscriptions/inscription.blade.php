@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($inscription)? "Modification d'une  Matiere" : "Création d'une nouvelle Matiere"}}
        </h1>
        <a href="{{route('inscription.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($inscription)? 'Formulaire de Modification Matiere' : "Formulaire d'inscription Matieres"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($inscription)? route('inscription.update',['id'=>$inscription->id]) : route('inscription.store')}}"
                      method="post">
                    @csrf
                    @if(isset($inscription))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom </label>
                        <input name="date" value="{{$inscription->date??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="date">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Eleve</label>
                        <input name="eleves_id" value="{{$inscription->eleves_id??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="coef">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Classe</label>
                        <input name="classes_id" value="{{$inscription->classes_id??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
                    </div>


                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
