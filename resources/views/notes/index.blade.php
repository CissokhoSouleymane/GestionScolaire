@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            LISTE DES NOTES :
        </h1>
        <a href="/nouvelle_note" class="btn btn-primary mt-3">AJOUTER UNE NOTE</a>


        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom de l'élève</th>
                    <th>Nom de la matière</th>
                    <th>Valeur de la note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{$note['note']->id}}</td>
                    <td>{{$note['eleve_prenom']}} {{$note['eleve_nom']}}</td>
                    <td>{{$note['matiere_nom']}}</td>
                    <td>{{$note['note']->valeur}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('notes.edit',['id'=>$note['note']])}}"
                        >
                            Modifier
                        </a>

                        <a
                            class="btn btn-danger"
                            href="{{route('notes.delete',['id'=>$note['note']])}}"
                            onclick="return confirm('Voulez vous supprimer cet element ?')"
                        >
                            Supprimer
                        </a>
                    </td>


                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
