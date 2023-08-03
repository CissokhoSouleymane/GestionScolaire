@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            La liste des Enseignants :
        </h1>
        <a href="/enseignant_ins" class="btn btn-primary mt-3">Nouveau Enseignant</a>


        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($enseignants as $enseignant)
                <tr>
                    <td>{{$enseignant->id}}</td>
                    <td>{{$enseignant->nom}}</td>
                    <td>{{$enseignant->prenom}}</td>
                    <td>{{$enseignant->telephone}}</td>
                    <td>{{$enseignant->adresse_email}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('enseignant.edit',['id'=>$enseignant])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('enseignant.delete',['id'=>$enseignant->id])}}"
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
