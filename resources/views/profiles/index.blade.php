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
        <h5 class="card-header bg-primary text-white"> Profil</h5>
        <div class="card-body">
            <form action="{{isset($profile)? route('profile.update',['id'=>$profile->id]) : route('profile.store')}}"
                  method="post">
                @csrf
                @if(isset($profile))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom du profil</label>
                    <input name="nom" value="{{$profile->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description du profil</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$profile->description??''}}</textarea>
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
        <th>Description</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->nom}}</td>
            <td>{{$profile->description}}</td>
            <td>{{date('d/m/Y H:i',strtotime($profile->created_at))}}</td>
            <td>
                <a
                    class="btn btn-primary"
                    href="{{route('profile.edit',['id'=>$profile])}}">Modifier</a>
                <a
                    class="btn btn-danger"
                    href="{{route('profile.delete',['id'=>$profile->id])}}"
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
