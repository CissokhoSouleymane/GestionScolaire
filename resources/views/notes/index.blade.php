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
                    <th>ID de l'élève</th>
                    <th>ID de la matière</th>
                    <th>Valeur de la note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{$note->id}}</td>
                    <td>{{$note->eleves_id}}</td>
                    <td>{{$note->matiere_id}}</td>
                    <td>{{$note->valeur}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('notes.edit',['id'=>$note])}}"
                        >
                            Modifier
                        </a>

                        <a
                            class="btn btn-danger"
                            href="{{route('notes.delete',['id'=>$note->id])}}"
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
