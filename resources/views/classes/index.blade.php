@extends('layouts.master')

@section("contenu")

    <div class="container" style="width: 750px">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            Classes :
        </h1>
        <a href="/classe_ins" class="btn btn-primary mt-3">Nouvelle Classe</a>


        <table style="" class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classes as $classe)
                <tr>
                    <td>{{$classe->id}}</td>
                    <td>{{$classe->nom}}</td>

                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('classe.edit',['id'=>$classe])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('classe.delete',['id'=>$classe->id])}}"
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
