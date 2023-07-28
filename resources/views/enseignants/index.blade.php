
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
        <h1 style="text-align: center;text-decoration: underline; color: blue" class="mt-3">
            La liste des Enseignants :
        </h1>
        <a href="/enseigant_ins" class="btn btn-primary mt-3">Nouveau Enseignant</a>


<table style="" class="table table-striped table-hover mt-3">
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

</body>

