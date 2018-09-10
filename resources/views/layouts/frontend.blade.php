<!Doctype html>

<html lang="es" class="no-js">

    <head>
        @include('layouts.cuerpo.metadatos')
        @yield('descripcion')
        @yield('title')
        @include('layouts.cuerpo.css')
        @yield('css')
    </head>
    <body>
        <header>
                @yield('h1')
                <nav class="navbar affix" role="navigation" id="navbar" data-spy="affix" data-offset-top="100">
                    <h2 hidden>Barra de Navegación</h2>
                    <div class="container-fluid navegacion">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <a href="/">
                                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo Exergy" width="150">
                                </a>
                            </div><!--navbar-header-->
                            <div class="collapse navbar-collapse" id="collapse">
                                <ul class="navbar-nav navbar-right bar-sup">     
                                    @if(Auth::guest())
                                        <li>
                                            <i class="fa fa-vcard fa-2x fa-border" aria-hidden="true"></i>
                                                <small>
                                                    <a href="{{ url('login') }}" class="llamar_registro">Loguearse</a> 
                                                    | 
                                                    <a href="{{ url('register') }}" class="llamar_registro">Registrarse</a>
                                                </small>
                                        </li>
                                    @else
                                        <li>
                                            <i class="fa fa-tachometer fa-2x fa-border" aria-hidden="true"></i>
                                            <p>Usuarios<br>
                                                <small>
                                                    <a href="{{ route('graficas.tareas') }}" class="llamar_registro">Tareas</a>
                                                    | 
                                                    <a href="{{ route('graficas.index') }}" class="llamar_registro">Graficar</a> 
                                                </small>
                                            </p>
                                        </li>
                                        <li class="dropdown" style="border:1px solid white;">
                                          @include('layouts.cuerpo.perfil')
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div> <!--collapse-->
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            <footer>
                <h2 hidden>Pie de Pagina</h2>
                <div class="container-fluid piepag">
                    <div class="col-md-3">
                        <h5>Servicios</h5>
                        <ul class="fa-ul">
                            <li><a href=""><i  class="fa-li fa fa-book"></i>Blog</a></li>
                            <li><a href=""><i  class="fa-li fa fa-lightbulb-o"></i>Otros</a></li>
                           <!-- <li><a href=""><i  class="fa-li fa fa-gears"></i>Soluciones de Ingeniería</a></li>-->
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Registro</h5>
                        <p><a  href="">Clientes</a></p>
                        <p><a  href="">Especialistas</a></p>
                    </div>
                    <div class="col-md-3">
                        <h5>Ayuda</h5>
                        <p><a  href="">Contactenos</a></p>
                    </div>
                    <div class="col-md-3">
                        <h5>Legal</h5>
                        <p><a  href="">Terminos y Condiciones</a></p>
                        <p><a  href="">Politica de Protección de Datos y Cookies</a></p>
                    </div>
                </div><!-- container piepag-->
            </footer>
        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('js')
</html>

