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

   

    <!-- Services Team -->
<section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comisión 707</h2>
                    <h3 class="section-subheading section-heading">Siempre que no te salga algo trata de resolverlo con un vaso de cerveza en la mano</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Iñaki Salvador Barreix</h4>
                        <p class="text-muted">Developer</p>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/isbarreix"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/isbarreix"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/isbarreix"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Juan Ignacio Cangelosi</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/juanicange"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/JuanCangelosi"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Diseñado y desarrollado por Barreix Iñaki y Cangelosi Juan Ignacio alumnos de Ingeniería de Aplicaciones Web (2017), DCIC, UNS.</p>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="cs.uns.edu.ar/~dcm/iaw/">Ingeniería de Aplicaciones Web</a>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

  

 @include('layouts.js')

   
   
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
