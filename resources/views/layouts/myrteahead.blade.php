<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>@yield('title')</title> 
    <meta name="description" content="Descripción de la web"> 
    <meta property="og:url" content="/"> 
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="@yield('title')"> 
    <meta property="og:description" content="Descripción de la web"> 
    <meta property="og:image" content="{{ asset('img/logo.png') }}"> 
    <meta charset="UTF-8"> 
    <meta name="robots" content="all"> 
    <meta name="REVISIT-AFTER" content="30 days"> 
    <meta content="{{ app()->getLocale() }}" name="language"> 
    <meta content="2017-12-31" name="date.created" lang="es"> 
    <meta content="document" name="type.category"> 
    <meta name="HandheldFriendly" content="true">
    <meta content="320" name="MobileOptimized"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}"> 
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet" type="text/css" media="all" charset="utf-8">
</head>

<body> 
  <header> 
    <nav> 
      <ul class="menu"> 
        <li> 
          <a href="{{ asset('/index.php/noticias') }}">NOTICIAS</a> 
        </li> 
        <li> <a href="{{ asset('/index.php/informacion') }}">INFORMACIÓN</a> 
          <ul class="submenu" style="display: none; height: 116px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="{{ asset('/index.php/como-llegar') }}">CÓMO LLEGAR</a></li> 
            <li><a href="{{ asset('/index.php/instalaciones') }}">INSTALACIONES</a></li> 
            <li><a href="{{ asset('/index.php/faq') }}">F.A.Q.</a></li> 
            <li><a href="{{ asset('/index.php/normas') }}">NORMAS</a></li>
            <li><a href="{{ asset('/index.php/lugares') }}">LUGARES DE INTERÉS</a></li>            
          </ul> 
        </li> 
        <li class="logo" style="width: 130px;"> 
          <a href="#"><img src="{{ asset('/img/logo.png') }}" alt="Logo"></a> 
        </li> 
        <li> <a href="{{ asset('/index.php/actividades') }}">ACTIVIDADES</a> 
          <ul class="submenu" style="display: none; height: 95px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="{{ asset('/index.php/actividades/rol') }}">PARTIDAS DE ROL</a></li> 
            <li><a href="{{ asset('/index.php/actividades/mesa') }}">JUEGOS DE MESA</a></li>
            <li><a href="{{ asset('/index.php/actividades/rev') }}">ROL EN VIVO</a></li> 
            <li><a href="{{ asset('/index.php/actividades/otros') }}">OTRAS ACTIVIDADES</a></li>
          </ul> 
        </li> 
        <li> <a href="#">CONTACTO</a> 
          <ul class="submenu" style="display: none; height: 50px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="#">PROPONER ACTIVIDAD</a></li> 
            <li><a href="#">INSCRIBIR</a></li> 
          </ul>        
        </li> 
      </ul> 
      <ul class="idioma"> </ul> 
      <a class="logo" href="#" target="_blank"><img src="{{ asset('/img/pie2.png') }}"></a> 
    </nav> 
    <div class="nav-icon"> 
      <span></span> 
      <span></span> 
      <span></span> 
    </div> 
    <a class="logomov" href="#"></a> 
  </header> 
