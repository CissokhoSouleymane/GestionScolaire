@extends('layouts.master')

@section("contenu")

    <div class="container">

        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            {{isset($note)? "Modification d'une Note" : "Ajout d'une nouvelle note"}}
        </h1>
        <a href="{{route('notes.index')}}" class="btn btn-danger mb-3">
            Retour
        </a>
        <div class="card">
            <h5 class="card-header bg-primary text-white">
                {{isset($note)? 'Formulaire de modification de la note' : "Formulaire d'ajout d'une note"}}
            </h5>
            <div class="card-body">
                <form action="{{isset($note)? route('notes.update',['id'=>$note->id]) : route('notes.store')}}"
                      method="post">
                    @csrf
                    @if(isset($note))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ID de l'élève</label>
                        <input name="eleves_id" value="{{$note->eleves_id??''}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Id de l'élève">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ID de la matière</label>
                        <input name="matiere_id" value="{{$note->matiere_id??''}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID de la matière">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Valeur de la note</label>
                        <input name="valeur" value="{{$note->valeur??''}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valeur de la note">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="ENREGISTRER">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
