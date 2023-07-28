
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
        {{isset($enseignant)? "Modification d'un  Enseignant" : "Création d'un nouveau Enseigant"}}
    </h1>
    <a href="{{route('enseignant.index')}}" class="btn btn-danger mb-3">
        Retour
    </a>
    <div class="card">
        <h5 class="card-header bg-primary text-white">
            {{isset($enseignant)? 'Formulaire de Modification Enseignant' : "Formulaire d'inscription Enseigants"}}
        </h5>
        <div class="card-body">
            <form action="{{isset($enseignant)? route('enseignant.update',['id'=>$enseignant->id]) : route('enseignant.store')}}"
                  method="post">
                @csrf
                @if(isset($enseignant))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom de l'enseignant</label>
                    <input name="nom" value="{{$enseignant->nom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prénom de l'enseignant</label>
                    <input name="prenom" value="{{$enseignant->prenom??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
                    <input name="telephone" value="{{$enseignant->telephone??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input name="adresse_email" value="{{$enseignant->adresse_email??''}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>

                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Envoyer">
                </div>

            </form>
        </div>

    </div>
</div>

</body>


