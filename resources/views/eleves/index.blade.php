@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            liste des Élèves :
        </h1>
        <a href="/nouvel_eleve" class="btn btn-primary mt-3">AJOUTER ELEVE</a>


        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
                <th>Niveau Scolaire</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($eleves as $eleve)
                <tr>
                    <td>{{$eleve->id}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td>{{$eleve->nom}}</td>
                    <td>{{$eleve->date_naissance}}</td>
                    <td>{{$eleve->adresse}}</td>
                    <td>{{$eleve->niveau_scolaire}}</td>
                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('eleves.edit',['id'=>$eleve])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('eleves.delete',['id'=>$eleve->id])}}"
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
