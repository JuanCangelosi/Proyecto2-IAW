<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caniex™ Anteojos</title>
    <link href="images/CaniexIcon.png" rel="shortcut icon" type="images/CaniexIcon.png" />


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="cssPropios/estilo.css" rel="stylesheet">


</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
                <div class="section1">
                    <div class="container">
                   <div class="intro-cont">
                        <img src="images/Caniexlogo.png" id="imgHeader" alt="">
                    </div>
                    <div class="intro-text">
                      <!--  <img src="images/Caniexlogo.png" class="img-responsive" alt="">
                        <!--<div class="intro-heading">It's Nice To Meet You</div>-->
                        @if (Route::has('login'))
                             @if (Auth::check())
                                <div class="intro-heading"> <span class="userName">Hola, {{ Auth::user()->name }}</span></div>
                                <a href="{{ url('/personalizador') }}" class="page-scroll btn btn-xl">Ir al personalizador</a>
                                @if(Auth::user()->isAdmin())
                                <a href="{{ url('/loadprecargado') }}" class="page-scroll btn btn-xl btn_color3">Ir al panel admin</a>
                                @endif
                                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="page-scroll btn btn-xl btn_color1">
                                            Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <a href="{{ url('/personalizador') }}" class="page-scroll btn btn-xl">Ir al personalizador</a>
                                <a href="{{ url('/login') }}" class="page-scroll btn btn-xl btn_color1">iniciar sesión</a>
                                <a href="{{ url('/register') }}" class="page-scroll btn btn-xl btn_color3">Registrarse</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            
    </header>

   

@include('layouts.about')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><a href="{{ url('/') }}"><i class="glyphicon glyphicon-sunglasses"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4-offset-2">
                    <ul class="list-inline quicklinks">
                        <li><a href="{{ url('/about') }}">Aspectos de la pagina</a></li>
                        <li><a href="https://cs.uns.edu.ar/~dcm/iaw/">Ingeniería de Aplicaciones Web</a>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

  

 @include('layouts.js')


</body>

</html>
