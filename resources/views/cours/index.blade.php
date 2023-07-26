<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous">
    </script>
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <h5 class="card-header bg-primary text-white"> Cours</h5>
        <div class="card-body">
            {{-- <form action="{{isset($cours)? route('cours.update',['id'=>$cours->id]) : route('cours.store')}}"
                  method="post"> --}}
                  <form action="{{ isset($coursItem) ? route('cours.update', ['id'=> $coursItem->id]) : route('cours.store') }}" method="POST">
                    @csrf
                    @if(isset($coursItem))
                        @method('PUT')
                    @endif
                    {{-- Formulaire de Création de Cours --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom du Cours</label>
                        <input name="nom" value="{{ $coursItem->nom ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date du cours</label>
                        <input name="date" value="{{ $coursItem->date ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Heure du cours</label>
                        <input name="heure" value="{{ $coursItem->heure ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Durée du cours</label>
                        <input name="duree" value="{{ $coursItem->duree ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Identifiant de l'enseignant</label>
                        <input name="enseignants_id" value="{{ $coursItem->enseignants_id ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Identifiant de la matière</label>
                        <input name="matiere_id" value="{{ $coursItem->matiere_id ?? '' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                    </div>
                </form>


        </div>
    </div>
</div>
<hr>
<h2> Liste </h2>

<table style="" class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Duree</th>
        <th>ID Enseignant</th>
        <th>ID Matiere</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($cours as $coursItem)
        <tr>
            {{-- <td>{{$coursItem->id}}</td> --}}
            <td>{{$coursItem->nom}}</td>
            <td>{{$coursItem->date}}</td>
            <td>{{$coursItem->heure}}</td>
            <td>{{$coursItem->enseignants_id}}</td>
            <td>{{$coursItem->duree}}</td>
            <td>{{$coursItem->matiere_id}}</td>
            <td>{{date('d/m/Y H:i',strtotime($coursItem->created_at))}}</td>
            <td>
                <a
                    class="btn btn-primary"
                    href="{{route('cours.edit',['id'=>$coursItem])}}">Modifier</a>
                <a
                    class="btn btn-danger"
                    href="{{route('cours.delete',['id'=>$coursItem->id])}}"
                    onclick="return confirm('Voulez vous supprimer cet element ?')"
                >
                    Supprimer
                </a>
            </td>
        </tr>
    @endforeach


    </tbody>
</table>


</body>
</html>
