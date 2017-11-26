<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/font/css/font-awesome.css">
    <link rel="stylesheet" href="/mdb/css/mdb.css">
    <link rel="stylesheet" href="/css/style.css"> 

    
</head>
<body>
    @include("layouts.nav")
    <nav class="navbar navbar-default navbar-static-top">
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
                <a><img src="img/Plataforma-02.jpg" class="img-responsive" alt="slide1">
                    <div class="mask waves-effect waves-light"></div>
                </a>
                <div class="carousel-caption hidden-xs">
                    <div class="da-slide">
                        <h2 style="font-weight: black;">Nuestra Comunidad</h2>
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
                <a><img src="img/Plataforma-02.jpg" class="img-responsive" alt="slide2">
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

<!--============================= /.Inicio del contenido de la web ===========================-->
<div class="container">
    <div class="col-md-12">
        <div class="col-md-10 col-md-offset-1">
            <p class="parrafo-intro">
                Plataforma educativa con el objetivo de unir a la comunidad estudiantil nicaraguense, a través
                de un sin número de herramientas que ayudarán a la formación académica de los estudiantes que hacen uso de la misma.
            </p>

            <video src="" controls autoplay loop muted preload="auto" poster="" class="video" >
                HTML5 Video is required for this example
            </video>
        </div>

        <center>
            <br><br>
            <h5 class="section-title h5-responsive">Promovemos</h5>
        </center>

        <div class="col-md-4">
            <div class="contedor-4 v">
                <center>
                    <div class="view hm-zoom overlay">
                        <img src="/img/Bombilla_Mesa de trabajo 1.png" class="img-fluid " alt="">
                        <div class="mask flex-center">
                         
                        </div>
                    </div>

                    <p class="parrafo-intro">Autodidácta</p> 
                </center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contedor-4">
                <center>
                    <div class="view hm-zoom overlay">
                        <img src="/img/Megafono_Mesa de trabajo 1.png" class="img-fluid " alt="">
                        <div class="mask flex-center">
                            
                        </div>
                    </div>
                    <p class="parrafo-intro">Comunicación</p> 
                </center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contedor-4">
                <center>
                    <div class="view hm-zoom overlay">
                        <img src="/img/Planta.png" class="img-fluid " alt="">
                        <div class="mask flex-center">
                            
                        </div>
                    </div>
                    <p class="parrafo-intro">formación Personal</p>
                </center>
            </div>
        </div>
        
    </div>
</div>



@include('layouts.footer')
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script src="/mdb/js/mdb.js"></script>

<script>
    $(document).ready(function(){
        var flag = false;
        var scroll;
        $(window).scroll(function(){
            scroll = $(window).scrollTop();
            if(scroll > 470){
                if(!flag){
                    $('.navbar').css({"background":  "#06446E"});
                    $('.navbar-default').css({"padding-top":"10px"})	
                    flag = true;
                }
            }else{
                if(flag){
                    $(".navbar").css({"background": "transparent"});
                    $('.navbar-default').css({"padding-top":"15px"})	
                    flag = false;
                }  
            }            
        });
    });
</script>
<script>
    $('.carousel').carousel();
</script>

</body>
</html>
