<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Meta -->
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content=""/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="@yield('title')" />       

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Ludus Myrtea</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Portada <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Actividades</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" placeholder="Search" type="text">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        
        <div class="my-2 my-lg-0">¿Tienes una cuenta?
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <a type="button" class="btn btn-primary btn-lg" href="{{ route('login') }}">Inicia sesión</a>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
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
                @endif
            </ul>        
        </div>        
        
      </div>
    </nav>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
    
        @section('sidebar')
            This is the master sidebar
        @show

        @yield('content')
      
    </div>
    <div class="col-sm-3">

        <div class="card border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">Ludus Myrtea</div>
          <div class="card-body text-primary">
            <h4 class="card-title">Próxima edición</h4>
            <p class="card-text">Del X al Z de Marzo de 2018.</p>
          </div>
        </div>

    </div>    
</div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cómo llegar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Instalaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Normas de las jornadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Preguntas frecuentes</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#">Lugares de interés</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#">Contactar</a>
          </li>  
           <li class="nav-item">
            <a class="nav-link" href="#">Voluntarios</a>
          </li>          
        </ul>
      </div>
    </nav>

</body>
</html>
