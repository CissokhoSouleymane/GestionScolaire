@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($eleves)? "Modification Elève" : "Ajout d'un nouvel élève"}}
        </h1>
        <a href="{{route('eleves.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($eleves)? 'Formulaire de Modification Eleve' : "Formulaire d'inscription de l'élève"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($eleves)? route('eleves.update',['id'=>$eleves->id]) : route('eleves.store')}}"
                      method="post">
                    @csrf
                    @if(isset($eleves))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prénom de l'élève</label>
                        <input name="prenom" value="{{$eleves->prenom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom de l'élève">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom de l'élève</label>
                        <input name="nom" value="{{$eleves->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom de l'élève">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date de naissance</label>
                        <input name="date_naissance" value="{{$eleves->date_naissance??''}}" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date de naissance">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">adresse</label>
                        <input name="adresse" value="{{$eleves->adresse??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adresse">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="niveau_scolaire" aria-label="Default select example" required>
                            <option value="Niveau scolaire">Niveau Scolaire</option>
                            <option value="primaire">Primaire</option>
                            <option value="secondaire" >Secondaire</option>
                            <option value="superieur">Supérieur</option>
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
