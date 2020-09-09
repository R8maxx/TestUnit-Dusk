<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>RM - @yield('title')</title>

        <script src="{{assert('js/app.js')}}" defer></script>

        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="icon" type="image/png" href="{{assert('img/logo.png')}}"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm site-header sticky-top">
            <!-- .container nos permite centrar el contenido de nuestro menu, esta clase es opcional y podemos encerrar el menu <nav> o incluir el contenedor dentro del <nav> -->
            <div class="container">
                <!-- Nos sirve para agregar un logotipo al menu -->
                <a href="#" class="navbar-brand">Menu</a>

                <!-- Nos permite usar el componente collapse para dispositivos moviles -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Inicio <span class="sr-only">(Actual)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menu-categorias">
                                <a href="#" class="dropdown-item">HTML</a>
                                <a href="#" class="dropdown-item">CSS</a>
                                <a href="#" class="dropdown-item">JS</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>

                    <form action="" class="form-inline my-2 my-lg-0">
                        <input type="text" class="form-control mr-sm-2" placeholder="Buscar" arial-label="Buscar">
                        <button class="btn btn-primary my-s my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>

    </body>
</html>
