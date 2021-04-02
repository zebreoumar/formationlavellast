<!doctype html>
    <html lang="fr">
      <head>
        <title>Formation DSI</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/app2.css')}}"/>

    </head>
      <body>
        <header>
            <div class="containerss ">
                <nav class="navbar navbar-expand-sm navbar-dark bg-success">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse bg-success" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('acceuil')}}">Formation DSI <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('acceuil')}}"> Acceuil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('procedure','burkina') }}">La procedure</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produit.liste') }}">Liste produit</a>

                            </li>

                            
                        </ul>
 <ul class="navbar-nav  mt-2 mt-lg-0">
 <li class="nav-item dropdown">
                            @guest
                                
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connexion</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">inscription</a>

                                </div>
                            @endguest
                            @auth
                                
                           
                               <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('deconnexion').submit();">Deconnexion</a>
                            <form method="post" id="deconnexion" action="{{route('logout')}}">
                            @csrf
                            </form>
                            @endauth
                            
                            </li>
 </ul>

                    </div>
                </nav>
            </div>
        </header>
<main>
    {{$slot}}

</main>




        <footer class="bg-success">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

    <img src="https://www.anptic.gov.bf/fileadmin/user_upload/armoirie-burkina-faso.png" style="height: 100px" alt="">
            </div>
        <div class="col-md-6">
            <br>
            <small class="text-light">395, Avenue du 11 Décembre

                01 BP 7008 Ouagadougou 01

                BURKINA FASO

                +226 25 32 42 11 / 25 31 44 807</small>
            </div></div>
        <div class="row">
            <div class="col-md-12 text-center">
                <small class="">
                    Copyright 2019. Tous droits Réservés. Service Public de l'Administration du Burkina Faso

                </small>
            </div>

        </div>
    </div>
        </footer>


        <script  src="{{asset('js/app2.js')}}"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
      </body>
    </html>
