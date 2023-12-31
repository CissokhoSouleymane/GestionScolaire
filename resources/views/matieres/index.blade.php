@extends('layouts.master')

@section("contenu")

    <div class="container">
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            La liste des Matieres :
        </h1>
        <a href="/matiere_ins" class="btn btn-primary mt-3">Nouvelle Matière</a>


        <table style="" class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Coef</th>
                <th>Classe</th>
                <th>Enseignant</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matieres as $matiere)
                <tr>
                    <td>{{$matiere['matiere']->id}}</td>
                    <td>{{$matiere['matiere']->nom}}</td>
                    <td>{{$matiere['matiere']->coef}}</td>
                    <td>{{$matiere['classe_nom'] }}</td>
                    <td>{{$matiere['enseignant_nom']}} {{$matiere['enseignant_prenom']}}</td>

                    <td>
                        <a
                            class="btn btn-primary"
                            href="{{route('matiere.edit',['id'=>$matiere['matiere']])}}">Modifier</a>

                        <a
                            class="btn btn-danger"
                            href="{{route('matiere.delete',['id'=>$matiere['matiere']])}}"
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
