   
    <nav class="navbar navbar1 navbar-default navbar-fixed-top">
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
                <a href="/inicio" class="navbar-brand" id="logo">
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
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" id="user" data-toggle="dropdown">
                                Registrate <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/register') }}" id="registro">Estudiante</a></li>
                                <li><a href="{{ url('/registroDoc') }}" id="registro">Docentes</a></li>
                            </ul>
                        </li>
                       
                    @else
                        <li><a href="/inicio">Inicio</a></li>
                        <li><a href="">Foro</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="">Recursos</a></li>
                        <li><a href="">Cursos</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li><a href="/perfilDoc/{{ Auth::user()->id }}" id="registro">Perfil</a></li>
                            </ul>
                        </li>
                       
                    @endguest
                </ul>
            </div>
        </div>
    </nav>