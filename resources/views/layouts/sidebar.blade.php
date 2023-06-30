    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Servicio De Internet</h3>
                <strong>SI</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="{{ 'home' == request()->path() ? 'active' : '' }}">
                    <a href="{{ url('/home') }}">
                        <i class="fas fa-home"></i>
                        <b>Home</b>
                    </a>
                </li>
                <li
                    class="{{ 'empleados' == Request::is('empleados*') ? 'active' : '' }} or {{ 'clientes' == Request::is('clientes*') ? 'active' : '' }}
                or {{ 'users' == Request::is('users*') ? 'active' : '' }} or {{ 'roles' == Request::is('roles*') ? 'active' : '' }}">
                    <a href="#UserMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        <b>Gestión De Usuarios</b>
                    </a>
                    <ul class="collapse list-unstyled" id="UserMenu">
                        <li class="{{ 'empleados' == Request::is('empleados*') ? 'active' : '' }}">
                            <a href="{{ url('/empleados') }}"><i class="fa fa-user-tie"></i> <b>Empleados</b></a>
                        </li>
                        <li class="{{ 'clientes' == Request::is('clientes*') ? 'active' : '' }}">
                            <a href="{{ url('/clientes') }}"><i class="fa fa-user"></i> <b>Clientes</b></a>
                        </li>
                        <li class="{{ 'users' == Request::is('users*') ? 'active' : '' }}">
                            <a href="{{ url('/users') }}"><i class="fa fa-users"></i> <b>Usuarios</b></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-clipboard"></i> <b>Bitácora</b></a>
                        </li>
                        <li class="{{ 'roles' == Request::is('roles*') ? 'active' : '' }}">
                            <a href={{ url('/roles') }}><i class="fa fa-user-lock"></i> <b>Privilegios</b></a>
                        </li>
                    </ul>
                </li>
                <li
                    class="{{ 'turnos' == Request::is('turnos*') ? 'active' : '' }} or {{ 'detalleTurnos' == Request::is('detalleTurnos*') ? 'active' : '' }}">
                    <a href="#ServiceMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        <b>Administración De Servicios</b>
                    </a>
                    <ul class="collapse list-unstyled" id="ServiceMenu">
                        <li>
                            <a href="#"><b>Nota De Servicio</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Nota De Solicitud</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Asistencia</b></a>
                        </li>
                        <li class="{{ 'turnos' == Request::is('turnos*') ? 'active' : '' }}">
                            <a href="{{ url('/turnos') }}"><i class="fas fa-clock"></i> <b>Turnos</b></a>
                        </li>
                        <li class="{{ 'detalleTurnos' == Request::is('detalleTurnos*') ? 'active' : '' }}">
                            <a href="{{ url('/detalleTurnos') }}"><i class="fas fa-user-clock"></i> <b>Asignar
                                    Turno</b></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        <b>About</b>
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        <b>Pages</b>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><b>Page 1</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Page 2</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Page 3</b></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        <b>Portfolio</b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <b> FAQ</b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        <b>Contact</b>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <!--<div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
        </div>-->
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
