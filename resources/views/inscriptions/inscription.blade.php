@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($inscription)? "Modification d'une  Inscription" : "Création d'une nouvelle Inscription"}}
        </h1>
        <a href="{{route('inscription.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($inscription)? 'Formulaire de Modification Inscriptions' : "Inscription d'un eleve à une classe"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($inscription)? route('inscription.update',['id'=>$inscription->id]) : route('inscription.store')}}"
                      method="post">
                    @csrf
                    @if(isset($inscription))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date </label>
                        <input name="date" value="{{$inscription->date??''}}" type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom de l'élève </label>
                        <select class="form-select" name="eleves_id" aria-label="Default select example" required>
                            @foreach($eleves as $eleve)
                                 <option  value="{{$eleve->id??''}}">{{$eleve->prenom}} {{$eleve->nom}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Choix de la classe </label>
                        <select class="form-select" name="classes_id" aria-label="Default select example" required>
                            @foreach($classes as $classe)
                                <option  value="{{$classe->id??''}}">{{$classe->nom}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
