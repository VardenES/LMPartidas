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
        <h3>ACTIVIDADES</h3> 
        <ul> 
          <li><a href="{{ asset('/index.php/rol') }}">Juegos de Rol</a></li> 
          <li><a href="{{ asset('/index.php/mesa') }}">Juegos de Mesa</a></li> 
          <li><a href="{{ asset('/index.php/rev') }}">Rol en Vivo</a></li> 
          <li><a href="{{ asset('/index.php/otras') }}">Otras actividades</a></li>
        </ul> 
        <h3>SECCIÓN 4</h3> 
        <ul> 
          <li><a href="#">Contacto</a></li> 
        </ul>  
      </div> 
      <div>  
        <h3>NUESTROS CANALES</h3> 
        <ul class="social"> 
          <li class="social"><a href="https://www.facebook.com/ludusmyrtea" target="_blank"><span>b</span> Facebook</a></li> 
          <li class="social"><a href="https://twitter.com/LudusMyrtea" target="_blank"><span>a</span> Twitter</a></li> 
          <li class="social"><a href="https://www.flickr.com/photos/94320221@N08/" target="_blank"><span>v</span> Flickr</a></li> 
          <li class="social"><a href="https://plus.google.com/+Ludusmyrtea" target="_blank"><span>c</span> Google +</a></li> 
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