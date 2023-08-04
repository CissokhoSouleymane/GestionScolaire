@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            La liste des Utilisateurs :
        </h1>
        <a href="/user_ins" class="btn btn-primary mt-3">Nouveau Utilisateur</a>


        <table style="" class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Loign</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nom}}</td>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->login}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('user.edit',['id'=>$user])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('user.delete',['id'=>$user->id])}}"
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
