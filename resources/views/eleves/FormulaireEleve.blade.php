@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($eleve)? "Modification Elève" : "Ajout d'un nouvel élève"}}
        </h1>
        <a href="{{route('eleves.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($eleve)? 'Formulaire de Modification Eleve' : "Formulaire d'inscription de l'élève"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($eleve)? route('eleves.update',['id'=>$eleve->id]) : route('eleves.store')}}"
                      method="post">
                    @csrf
                    @if(isset($eleve))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prénom de l'élève</label>
                        <input name="prenom" value="{{$eleve->prenom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom de l'élève">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom de l'élève</label>
                        <input name="nom" value="{{$eleve->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom de l'élève">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date de naissance</label>
                        <input name="date_naissance" value="{{$eleve->date_naissance??''}}" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date de naissance">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">adresse</label>
                        <input name="adresse" value="{{$eleve->adresse??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adresse">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="niveau_scolaire" aria-label="Default select example">
                            <option value="{{$eleve->niveau_scolaire == 'primaire' ? 'selected' : '' }}">Primaire</option>
                            <option value="{{$eleve->niveau_scolaire == 'sécondaire' ? 'selected' : '' }}">Secondaire</option>
                            <option value="{{ $eleve->niveau_scolaire == 'supérieur' ? 'selected' : '' }}">Supérieur</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="ENREGISTRER">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
