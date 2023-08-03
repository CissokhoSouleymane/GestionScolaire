@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            La liste des Inscription :
        </h1>
        <a href="/inscription_ins" class="btn btn-primary mt-3">Nouvelle Inscription</a>


        <table style="" class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Eleve</th>
                <th>Classe</th>

            </tr>
            </thead>
            <tbody>
            @foreach($inscriptions as $inscription)
                <tr>
                    <td>{{$inscription->id}}</td>
                    <td>{{$inscription->date}}</td>
                    <td>{{$inscription->eleves_id}}</td>
                    <td>{{$inscription->classes_id}}</td>

                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('inscription.edit',['id'=>$inscription])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('inscription.delete',['id'=>$inscription->id])}}"
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
