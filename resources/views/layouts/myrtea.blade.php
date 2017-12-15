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
          <a href="#">SECCIÓN 1</a> 
          <ul class="submenu" style="display: none; height: 96px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="#">SUBSECCIÓN 1</a></li> 
            <li><a href="#">SUBSECCIÓN 2</a></li> 
            <li><a href="#">SUBSECCIÓN 3</a></li> 
            <li><a href="#">SUBSECCIÓN 4</a></li> 
          </ul> 
        </li> 
        <li> <a>SECCIÓN 2</a> 
          <ul class="submenu" style="display: none; height: 72px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="#">SUBSECCIÓN 1</a></li> 
            <li><a href="#">SUBSECCIÓN 2</a></li> 
            <li><a href="#">SUBSECCIÓN 3</a></li> 
          </ul> 
        </li> 
        <li class="logo" style="width: 130px;"> 
          <a href="#"><img src="{{ asset('/img/logo.png') }}" alt="Logo"></a> 
        </li> 
        <li> <a>SECCIÓN 3</a> 
          <ul class="submenu" style="display: none; height: 72px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"> 
            <li><a href="#">SUBSECCIÓN 1</a></li> 
            <li><a href="#">SUBSECCIÓN 2</a></li> 
            <li><a href="#">SUBSECCIÓN 3</a></li> 
          </ul> 
        </li> 
        <li> <a href="#">SECCIÓN 4</a> </li> 
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

  <section class="homeHeader"> 
    <div class="owl-carousel owl-theme owl-loaded owl-drag">       
      <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(-8315px, 0px, 0px); transition: all 1s ease 0s; width: 19956px;">
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back6"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back7"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back8"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px;">
            <div class="item back1"> 
              <a href="#"> 
                <div class="content"> 
                  <h1>¡Texto 1!</h1> 
                  <aside><span data-hover="VER MÁS">VER MÁS</span></aside> 
                </div> 
              </a> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px;">
            <div class="item back2"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item active" style="width: 1663px;">
            <div class="item back5"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px;">
            <div class="item back6"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px;">
            <div class="item back7"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px;">
            <div class="item back8"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back1"> 
              <a href="#"> 
                <div class="content"> 
                  <h1>¡Texto 1!</h1> 
                  <aside><span data-hover="VER MÁS">VER MÁS</span></aside> 
                </div> 
              </a> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back2"> 
              <a href="#"> </a> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px;">
            <div class="item back5"> 
              <a href="#"> </a> 
            </div>
          </div>
        </div>
      </div>
      <div class="owl-nav">
        <div class="owl-prev">prev</div>
        <div class="owl-next">next</div>
      </div>
      <div class="owl-dots">
        <div class="owl-dot">
          <span></span>
        </div>
        <div class="owl-dot">
          <span></span>
        </div>
        <div class="owl-dot active">
          <span></span>
        </div>
        <div class="owl-dot">
          <span></span>
        </div>
        <div class="owl-dot">
          <span></span>
        </div>
        <div class="owl-dot">
          <span></span>
        </div>
      </div>
    </div> 
    <a class="down scrollingHome"></a> 
  </section> 

  <section class="homeConservas"> 
    <article class="efecto efecto3 animate3"> 
      <a href="#"> 
        <h2>Título 2</h2> 
        <p>Texto lorem ipsun.</p> 
        <aside><span data-hover="VER MÁS">VER MÁS</span></aside> 
      </a> 
    </article> 
    <article class="efecto efecto2 animate2"> </article> 
  </section> 
  <section class="homePlatos"> 
    <article class="efecto efecto2 animate2"> 
      <a href="#"> 
        <h2>Título 2</h2> 
        <p>Texto lorem ipsun.</p> 
        <aside><span data-hover="VER MÁS">VER MÁS</span></aside>
      </a> 
    </article> 
    <article class="efecto efecto3 animate3"> </article> 
  </section> 
  <section class="homeenLata"> 
    <article class="efecto efecto3 animate3"> 
      <a href="#"> 
        <h2>Título 3</h2> 
        <p>Texto lorem ipsun.</p> 
        <aside><span data-hover="VER MÁS">VER MÁS</span></aside> 
      </a> 
    </article> 
    <article class="efecto efecto2 animate2"> </article> 
  </section> 
  <section class="homeCuida"> 
    <article class="efecto efecto3 animate3"> 
      <a href="#"> 
        <h2>Título 4</h2> 
        <p>Texto lorem ipsun.</p> 
        <aside><span data-hover="VER MÁS">VER MÁS</span></aside> 
      </a> 
    </article> 
    <article class="efecto efecto2 animate2"> </article> 
  </section> 
  <section class="historiahome efecto efecto1 animate1"> 
    <article class="text efecto efecto3 animate3"> 
      <a href="#"> 
        <h2>Título 5</h2> 
        <p>Texto lorem ipsun.</p> 
        <aside class="boton">
          <span data-hover="¿QUIÉRES CONOCERLA?">¿QUIERES CONOCERLA?</span>
        </aside> 
      </a>  
    </article>
  </section>  
  <div class="clear"></div> 
  <section class="homeNovedadesFinal"> 
    <div class="owl-carousel owl-theme owl-loaded owl-drag">    
      <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(-3366px, 0px, 0px); transition: all 0s ease 0s; width: 11781px;">
          <div class="owl-item cloned" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2>Título 6</h2> 
                  <h3>Subtítulo</h3> 
                  <div class="rightNov nove2 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub"></p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove2 pc"></div> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2 class="tex-mex">Título 7</h2> 
                  <div class="rightNov nove3 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub">¡Mensaje!</p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove3 pc"></div> 
            </div>
          </div>
          <div class="owl-item active" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2>Título 8</h2> 
                  <h3>Subtítulo</h3> 
                  <div class="rightNov nove1 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub">¡Mensajes!</p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove1 pc"></div> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2>Título 9</h2> 
                  <h3>Subtítulo</h3> 
                  <div class="rightNov nove2 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub"></p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove2 pc"></div> 
            </div>
          </div>
          <div class="owl-item" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2 class="tex-mex">Título 10</h2> 
                  <div class="rightNov nove3 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub">¡Mensaje!</p>
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove3 pc"></div> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2>Título 11</h2> 
                  <h3>Subtítulo</h3> 
                  <div class="rightNov nove1 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub">¡Mensaje!</p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove1 pc"></div> 
            </div>
          </div>
          <div class="owl-item cloned" style="width: 1663px; margin-right: 20px;">
            <div class="item"> 
              <div class="leftNov"> 
                <div> 
                  <h2>Título 12</h2> 
                  <h3>Subtítulo</h3> 
                  <div class="rightNov nove2 mov"></div> 
                  <p>Texto lorem ipsun.</p> 
                  <p class="sub"></p> 
                  <a href="#">
                    <span data-hover="VER MÁS">VER MÁS</span>
                  </a> 
                </div> 
              </div> 
              <div class="rightNov nove2 pc"></div> 
              </div>
            </div>
          </div>
        </div>
        <div class="owl-nav">
          <div class="owl-prev">prev</div>
            <div class="owl-next">next</div>
        </div>
        <div class="owl-dots">
          <div class="owl-dot active">
            <span></span>
          </div>
          <div class="owl-dot">
            <span></span>
          </div>
          <div class="owl-dot">
            <span></span>
          </div>
        </div>
    </div> 
  </section>  
  <section class="newsletterfollow"> 
    <div class="contentNews"> 
      <h2>Suscríbete a nuestra newsletter</h2> 
      <input class="limpiacampo" value="Introduce tu correo para recibir noticias" type="text"> 
      <input value="Enviar" type="submit"> 
      <div class="check"> 
        <input id="bases" type="checkbox"> 
        <label for="bases">He leído y acepto 
          <a href="#" target="_blank">la política de privacidad</a>
        </label> 
      </div> 
      <div class="clear"></div> 
    </div> 
    <h2 class="follow">¡Síguenos!</h2> 
    <ul class="social"> 
      <li class="social"><a href="https://www.facebook.com/#" target="_blank"><span>b</span></a></li> 
      <li class="social"><a href="https://twitter.com/#" target="_blank"><span>a</span></a></li> 
      <li class="social"><a href="https://www.pinterest.com/#/" target="_blank"><span>d</span></a></li> 
      <li class="social"><a href="https://plus.google.com/+#" target="_blank"><span>c</span></a></li> 
      <li class="social"><a href="https://www.linkedin.com/company/#" target="_blank"><span>j</span></a></li>  
      <li class="social"><a href="https://www.youtube.com/user/#" target="_blank"><span>r</span></a></li> 
      <li class="social"><a href="http://blog.#.info/" target="_blank"><span><i class="fa fa-rss" aria-hidden="true"></i></span></a></li> 
    </ul>
  </section>

  <footer> 
    <div class="contentFoot"> 
      <div> 
        <h3>SECCIÓN 1</h3> 
        <ul>  
          <li><a href="#">Subsección 1</a></li> 
          <li><a href="#">Subsección 2</a></li> 
          <li><a href="#">Subsección 3</a></li> 
          <li><a href="#">Subsección 4</a></li> 
        </ul> 
        <h3>SECCIÓN 2</h3> 
        <ul> 
          <li><a href="#">Subsección 1</a></li> 
          <li><a href="#">Subsección 2</a></li> 
          <li><a href="#">Subsección 3</a></li> 
        </ul> 
      </div> 
      <div> 
        <h3>SECCIÓN 3</h3> 
        <ul> 
          <li><a href="#">Subsección 1</a></li> 
          <li><a href="#">Subsección 2</a></li> 
          <li><a href="#">Subsección 3</a></li> 
        </ul> 
        <h3>SECCIÓN 4</h3> 
        <ul> 
          <li><a href="#">Contacto</a></li> 
        </ul>  
      </div> 
      <div>  
        <h3>NUESTROS CANALES</h3> 
        <ul class="social"> 
          <li class="social"><a href="https://www.facebook.com/carretillacomoesnatural" target="_blank"><span>b</span> Facebook</a></li> 
          <li class="social"><a href="https://twitter.com/ElCarretillero" target="_blank"><span>a</span> Twitter</a></li> 
          <li class="social"><a href="https://www.pinterest.com/carretilla/" target="_blank"><span>d</span> Pinterest</a></li> 
          <li class="social"><a href="https://plus.google.com/+carretilla" target="_blank"><span>c</span> Google +</a></li> 
          <li class="social"><a href="https://www.linkedin.com/company/carretilla" target="_blank"><span>j</span> Linkedin</a></li>  
          <li class="social"><a href="https://www.youtube.com/user/carretilla" target="_blank"><span>r</span> YouTube</a></li> 
          <li class="social"><a href="http://blog.carretilla.info/" target="_blank"><span><i class="fa fa-rss" aria-hidden="true"></i></span> Blog</a></li> 
        </ul> 
      </div> 
      <div> 
        <h3>LEGAL</h3> 
        <ul> 
          <li><a href="#" target="_blank">Aviso legal</a></li> 
          <li><a href="#" target="_blank">Política de privacidad</a></li>  
        </ul>  
      </div> 
      <div class="clear"></div> 
    </div> 
    <div class="clear"></div> 
    <div class="subfooter"> 
      <div class="content"> 
        <a href="#" target="_blank"><img alt="subfooter1" src="{{ asset('/img/pie3.png') }}"></a> 
        <a href="#" target="_blank"><img alt="subfooter2" src="{{ asset('/img/pie2.png') }}"></a> 
        <a href="#" target="_blank"><img alt="subfooter3" src="{{ asset('/img/pie1.png') }}"></a> 
      </div> 
    </div> 
  </footer> 

  <div class="cover"> 
    <div class="popup"> 
      <div class="center"> 
        <a class="cerrar"> 
          <span></span> 
          <span></span> 
        </a> 
        <p class="mensajes">Recuerda que todos los campos son obligatorios</p> 
      </div> 
    </div> 
  </div> 

  <script async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" src="{{ asset('/scripts/jquery-2.1.4.min.js') }}" language="javascript"></script>
  <script type="text/javascript" src="{{ asset('/scripts/version.js') }}" language="javascript"></script>
  <link href="{{ asset('/styles/navegadores/ffx.css') }}" rel="stylesheet" type="text/css" media="all" charset="utf-8"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <script type="text/javascript" src="{{ asset('/scripts/functions.min.js') }}" language="javascript"></script>   
  <link href="{{ asset('/css/css.css') }}" rel="stylesheet"> 

  <script> 
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 
    Date();a=s.createElement(o), 
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-XXXX-1', 'auto'); ga('send', 'pageview'); 
  </script> 

  <link rel="stylesheet" href="{{ asset('/css/owl.css') }}"> 
  <script type="text/javascript" src="{{ asset('/scripts/functionsHome.txt') }}" language="javascript"></script> 
  <script type="text/javascript" src="{{ asset('/scripts/owl.txt') }}" language="javascript"></script>
</body>
</html>