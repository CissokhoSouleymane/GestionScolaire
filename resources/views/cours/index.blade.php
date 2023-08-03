@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            LISTE DES COURS :
        </h1>
        <a href="/nouveau_cours" class="btn btn-primary mt-3">AJOUTER UN COURS</a>


        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Durée</th>
                    <th>Identifiant de l'enseignant</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cours as $cour)
                <tr>
                    <td>{{$cour->id}}</td>
                    <td>{{$cour->nom}}</td>
                    <td>{{$cour->duree}}</td>
                    <td>{{$cour->enseignants_id}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('cours.edit',['id'=>$cour])}}"
                        >
                            Modifier
                        </a>

                        <a
                            class="btn btn-danger"
                            href="{{route('cours.delete',['id'=>$cour->id])}}"
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
