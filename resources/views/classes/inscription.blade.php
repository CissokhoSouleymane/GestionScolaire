@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($classe)? "Modification d'une  Classe" : "Création d'une nouvelle Classe"}}
        </h1>
        <a href="{{route('classe.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($classe)? 'Formulaire de Modification Classe' : "Formulaire d'inscription Classe"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($classe)? route('classe.update',['id'=>$classe->id]) : route('classe.store')}}"
                      method="post">
                    @csrf
                    @if(isset($classe))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom </label>
                        <input name="nom" value="{{$classe->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                    </div>



                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
