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



    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">


    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

       // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
          });
        } // End if
      });
    })
    </script> 



    <style>
      /* Add an orange color to all icons and set the font-size */
      .logo-small {
          color: #f4511e;
          font-size: 50px;
      }

      .logo {
          color: #f4511e;
          font-size: 200px;
      }

      .thumbnail {
          padding: 0 0 15px 0;
          border: none;
          border-radius: 0;
      }

      .thumbnail img {
          width: 100%;
          height: 100%;
          margin-bottom: 10px;
      }


      .carousel-control.right, .carousel-control.left {
          background-image: none;
          color: #f4511e;
      }

      .carousel-indicators li {
          border-color: #f4511e;
      }

      .carousel-indicators li.active {
          background-color: #f4511e;
      }

      .item h4 {
          font-size: 19px;
          line-height: 1.375em;
          font-weight: 400;
          font-style: italic;
          margin: 70px 0;
      }

      .item span {
          font-style: normal;
      }



      .panel {
          border: 1px solid #f4511e;
          border-radius:0;
          transition: box-shadow 0.5s;
      }

      .panel:hover {
          box-shadow: 5px 0px 40px rgba(0,0,0, .2);
      }

      .panel-footer .btn:hover {
          border: 1px solid #f4511e;
          background-color: #fff !important;
          color: #f4511e;
      }

      .panel-heading {
          color: #fff !important;
          background-color: #f4511e !important;
          padding: 25px;
          border-bottom: 1px solid transparent;
          border-top-left-radius: 0px;
          border-top-right-radius: 0px;
          border-bottom-left-radius: 0px;
          border-bottom-right-radius: 0px;
      }

      .panel-footer {
          background-color: #fff !important;
      }

      .panel-footer h3 {
          font-size: 32px;
      }

      .panel-footer h4 {
          color: #aaa;
          font-size: 14px;
      }

      .panel-footer .btn {
          margin: 15px 0;
          background-color: #f4511e;
          color: #fff;
      }



      .navbar {
          margin-bottom: 0;
          background-color: #f4511e;
          z-index: 9999;
          border: 0;
          font-size: 12px !important;
          line-height: 1.42857143 !important;
          letter-spacing: 4px;
          border-radius: 0;
      }

      .navbar li a, .navbar .navbar-brand {
          color: #fff !important;
      }

      .navbar-nav li a:hover, .navbar-nav li.active a {
          color: #f4511e !important;
          background-color: #fff !important;
      }

      .navbar-default .navbar-toggle {
          border-color: transparent;
          color: #fff !important;
      }



      footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #f4511e;
      }



      body {
          font: 400 15px Lato, sans-serif;
          line-height: 1.8;
          color: #818181;
      }

      .jumbotron {
          background-color: #f4511e;
          color: #fff;
          padding: 100px 25px;
          font-family: Montserrat, sans-serif;
      }

      .navbar {
          font-family: Montserrat, sans-serif;
      }



      h2 {
          font-size: 24px;
          text-transform: uppercase;
          color: #303030;
          font-weight: 600;
          margin-bottom: 30px;
      }

      h4 {
          font-size: 19px;
          line-height: 1.375em;
          color: #303030;
          font-weight: 400;
          margin-bottom: 30px;
      }




      .slideanim {visibility:hidden;}
      .slide {
          /* The name of the animation */
          animation-name: slide;
          -webkit-animation-name: slide;
          /* The duration of the animation */
          animation-duration: 1s;
          -webkit-animation-duration: 1s;
          /* Make the element visible */
          visibility: visible;
      }

      /* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
      @keyframes slide {
          0% {
              opacity: 0;
              transform: translateY(70%);
          }
          100% {
              opacity: 1;
              transform: translateY(0%);
          }
      }
      @-webkit-keyframes slide {
          0% {
              opacity: 0;
              -webkit-transform: translateY(70%);
          }
          100% {
              opacity: 1;
              -webkit-transform: translateY(0%);
          }
      }



      @media screen and (max-width: 768px) {
          .col-sm-4 {
              text-align: center;
              margin: 25px 0;
          }
      }
    </style>


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="container">

  <div class="row">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ludus Myrtea</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Portada <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Actividades</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Información <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="#">Cómo llegar</a></li>
                <li><a href="#">Instalaciones</a></li>
                <li><a href="#">Lugares de Interés</a></li>                
                <li class="divider"></li>
                <li><a href="#">Normas de las Jornadas</a></li>
                <li class="divider"></li>
                <li><a href="#">Preguntas Frecuentes (FAQ)</a></li>
              </ul>
            </li>
            <li><a href="#">Voluntarios</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right navbar-form">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <div>¿Tienes una cuenta?</div>
                  <a type="button" class="btn btn-primary" href="{{ route('login') }}">Inicia sesión</a>
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
  </div>
</div>


 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
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
</div>







<div class="container">
<div class="row">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="#">Quienes Somos</a></li>
        <li><a href="#">Cómo llegar</a></li>
        <li><a href="#">Instalaciones</a></li>        
        <li><a href="#">Lugares de interés</a></li>
        <li><a href="#">Normas de las Jornadas</a></li>
        <li><a href="#">Preguntas frecuentes</a></li>
      </ul>

    </div>
  </div>
</nav>

  </div>


</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
