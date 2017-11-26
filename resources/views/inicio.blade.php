<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font/css/font-awesome.css">
    <link rel="stylesheet" href="mdb/css/mdb.css">
    <link rel="stylesheet" href="css/style.css"> 

    <style>
        .navbar{
            background:#032049 !important;
            height: 60px;
        }
        .navbar {
            margin-bottom: 0px; 

        }
        .navbar-brand > img {
            width: 125px;
        }

        .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
            margin-top: -16px;
        }
        .navbar-default .navbar-nav > li > a {
            color: #fff;
        }
        .navbar-default .navbar-nav>li>a:hover {
            color: #f1d432;
            background:#2597f4;
            height:15px;
            border-radius:15px;
            margin-top:16px;
            line-height: 0px;
        }


    </style>
</head>
<body>
    @include("layouts.nav")
    {{--  <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="/" class="navbar-brand" id="logo">
                    <img src="../img/logo/Logo blanco.png" alt="educarte" class="img-responsive"> 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="/inicio">Inicio</a></li>
                        <li><a href="">Foro</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="{{ route('login') }}">Acceder</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
  --}}
        <!--============================= /.Inicio carousel ===========================-->
        <div id="carousel1" class="carousel slide carousel-fade hoverable">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active">
                </li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner z-depth-2" role="listbox">

                <!-- First slide -->
                <div class="item active">
                    <div class="view overlay hm-blue-slight">
                        <a><img src="img/Background.jpg" class="img-responsive" alt="slide1">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                        <div class="carousel-caption hidden-xs">
                            <div class="da-slide">
                                <h2>Nuestra Comunidad</h2>
                                <h5>La más grande de educación en línea en Nicaragua.</h5>
                                <div class="da-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

                <!-- Second slide -->
                <div class="item">
                    <div class="view overlay hm-blue-slight">
                        <a><img src="img/Background.jpg" class="img-responsive" alt="slide2">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                        <div class="carousel-caption hidden-xs">
                            <div class="da-slide">
                                <h2>Estudia en línea</h2>
                                <h5>Encuentra la información que necesites para tus tareas.</h5>
                                <div class="da-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

                <!-- /.item -->

            </div>
            <!-- /.carousel-inner -->

            <!-- Controls -->
            <a class="left carousel-control new-control" href="#carousel1" role="button" data-slide="prev">
                <span class="fa fa fa-angle-left waves-effect waves-light"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control new-control" href="#carousel1" role="button" data-slide="next">
                <span class="fa fa fa-angle-right waves-effect waves-light"></span>
                <span class="sr-only">Previous</span>
            </a>

        </div>
        <!-- /.carousel -->
        <!--============================= /.Fin carousel ===========================-->



    
    @include('layouts.footer')
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="mdb/js/mdb.js"></script>
    <script>
        $('.carousel').carousel();
    </script>
       
</body>
</html>
