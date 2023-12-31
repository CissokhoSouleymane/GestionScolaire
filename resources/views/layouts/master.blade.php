
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>GESCO Application</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">





    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">GESTION SCOLAIRE</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                         Accueil
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('enseignant*') ? 'active' : '' }}" href="{{ route('enseignant.index') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                        Enseignants
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('eleves*') ? 'active' : '' }}" href="{{ route('eleves.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Élèves
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('cours*') ? 'active' : '' }}" href="{{ route('cours.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Cours
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('notes*') ? 'active' : '' }}" href="{{ route('notes.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Notes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('classe*') ? 'active' : '' }}" href="{{ route('classe.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Classe
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('inscription*') ? 'active' : '' }}" href="{{ route('inscription.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Inscription
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('matiere*') ? 'active' : '' }}" href="{{ route('matiere.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Matière
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                            Utilisateurs
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- yield signifie que cette partie du code sera dynamique , donc chaque classe fille doit l'implementer -->
            @yield('contenu')

        </main>
    </div>
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="{{asset('js/feather.min.js')}}" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>
