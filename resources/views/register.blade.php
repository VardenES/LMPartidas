<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- Meta tags -->
	<title>Responsive Form</title>
	<meta name="keywords" content="keywords 1, keywords 2, keywords 3, 
	keywords 4, keywords 5, keywords6, keywords7" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
	<!-- scripts -->
<script>
window.onload = function() {
  // dias is an object but you can think of it as a lookup table
  var dias = {
        'Viernes': ['17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15'],
        'Sábado': ['10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15'],        
        'Domingo': ['10:30', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15']
      },
      // just grab references to the two drop-downs
      dia_select = document.querySelector('#dia'),
      hora_select = document.querySelector('#hora');

  // populate the provinces drop-down
  setOptions(dia_select, Object.keys(dias));
  // populate the town drop-down
  setOptions(hora_select, dias[dia_select.value]);
  
  // attach a change event listener to the provinces drop-down
  dia_select.addEventListener('change', function() {
    // get the towns in the selected province
    setOptions(hora_select, dias[dia_select.value]);
  });
    
  function setOptions(dropDown, options) {
    // clear out any existing values
    dropDown.innerHTML = '';
    // insert the new options into the drop-down
    options.forEach(function(value) {
      dropDown.innerHTML += '<option name="' + value + '">' + value + '</option>';
    });
  }  
};
</script>

</head>
<body>





	<div class="w3ls-banner">
	<div class="heading">
		<h1>Formulario de Actividades</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Completa los datos de tu partida</h2>
				<p>Rellena el siguiente formulario para solicitar una reserva de espacio en las jornadas.</p>
			</div>
			<div class="agile-form">
				<form action="/" method="post">
					<ul class="field-list">

						<li>
							<label class="form-label"> 
								Nombre de usuario:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_name" placeholder="Nombre de usuario" required >
							</div>
						</li>

						<li>
							<label class="form-label"> 
								Contraseña:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_pass" placeholder="Contraseña" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Repite contraseña:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_pass2" placeholder="Repite contraseña" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Nombre:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_pass" placeholder="Nombre" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Apellidos:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_surname" placeholder="Apellidos" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Sexo:
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">
									<select name="sexo" class="dropDown">
										<option value="Hombre">Hombre</option>
										<option value="Mujer">Mujer</option>
									</select>
								</span>
							</div>
						</li>


						<li>
							<label class="form-label"> 
								Club:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="user_club" placeholder="Club" required >
							</div>
						</li>

		    <!-- New Birth Date -------- OJO PILLADO DE OTRA WEB - REVISAR BIEN -->

						<li>
							<label class="form-label">
							   Horario
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">							
									<select name="myNewDate_day" id="myNewDate_day">
										<option value="" selected="selected"></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										</select>
									<label class="form-sub-label1"> Día </label>
								</span>
								<span class="form-sub-label">
									<select name="myNewDate_month" id="myNewDate_month">
										<option value="" selected="selected"></option>
										<option value="1">enero</option>
										<option value="2">febrero</option>
										<option value="3">marzo</option>
										<option value="4">abril</option>
										<option value="5">mayo</option>
										<option value="6">junio</option>
										<option value="7">julio</option>
										<option value="8">agosto</option>
										<option value="9">septiembre</option>
										<option value="10">octubre</option>
										<option value="11">noviembre</option>
										<option value="12">diciembre</option>
									</select>
									<label class="form-sub-label1"> Mes </label>
								</span>
								<span class="form-sub-label">
									<select name="myNewDate_year" id="myNewDate_year">
										<option value="" selected="selected"></option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
										<option value="1939">1939</option>
										<option value="1938">1938</option>
										<option value="1937">1937</option>
										<option value="1936">1936</option>
										<option value="1935">1935</option>
										<option value="1934">1934</option>
										<option value="1933">1933</option>
										<option value="1932">1932</option>
										<option value="1931">1931</option>
										<option value="1930">1930</option>
										<option value="1929">1929</option>
										<option value="1928">1928</option>
										<option value="1927">1927</option>
										<option value="1926">1926</option>
										<option value="1925">1925</option>
										<option value="1924">1924</option>
										<option value="1923">1923</option>
										<option value="1922">1922</option>
										<option value="1921">1921</option>
										<option value="1920">1920</option>
										<option value="1919">1919</option>
										<option value="1918">1918</option>
										<option value="1917">1917</option>
										<option value="1916">1916</option>
										<option value="1915">1915</option>
										<option value="1914">1914</option>
										<option value="1913">1913</option>
										<option value="1912">1912</option>
										<option value="1911">1911</option>
										<option value="1910">1910</option>
										<option value="1909">1909</option>
										<option value="1908">1908</option>
										<option value="1907">1907</option>
										<option value="1906">1906</option>
										<option value="1905">1905</option>
										<option value="1904">1904</option>
										<option value="1903">1903</option>
										<option value="1902">1902</option>
										<option value="1901">1901</option>
										<option value="1900">1900</option>
									</select>
									<label class="form-sub-label1"> Mes </label>
								</span>

</br></br></br></br></br>
<p>FALTARIA:</br>
	- NIF (con formato)</br>
	- Email</br>
	- Dirección</br>
	- Código postal</br>
	- Población</br>
	- Provincia</br>
	- País</br>
	- Teléfono fijo</br>
	- Teléfono móvil</br>
	- Talla camiseta ?</br>
	- Tipo camiseta ?</br>
	- NIF del responsable del menor ?</br>
	- Teléfono del responsable del menor ?</br>
	- Observaciones</br>
</p>







					<fieldset>
						<legend align="right">PARTIDA</legend>


						<li>
							<label class="form-label"> 
								Nombre del Juego (Ver <a href="http://leaverou.github.io/awesomplete/">Autocompletar</a>)
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="juego_nombre" placeholder="Indica el nombre del juego" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Título Partida 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="partida_nombre" placeholder="Indica el nombre de la partida" required >
							</div>
						</li>

						<li class="last-type"> 
							<label class="form-label1">
								Selecciona la temática de la partida:
								<span class="form-required"> * </span>
							</label>
							<div class="form-input2">
								<input type="checkbox" name="accion" ><label class="tematica">Acción</label>
								<input type="checkbox" name="aventura" ><label class="tematica">Aventura</label>
								<input type="checkbox" name="investigacion" ><label class="tematica">Investigación</label><br/>
								<input type="checkbox" name="terror" ><label class="tematica">Terror</label>
								<input type="checkbox" name="humor" ><label class="tematica">Humor</label>
								<input type="checkbox" name="secret" ><label class="tematica">Sin determinar</label>
							</div>
						</li>						
					</fieldset>
					<fieldset>
						<legend align="right">HORARIO</legend>

						<li>
							<label class="form-label">
							   Horario
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">							
									<select id="dia" name="dia"></select>
									<label class="form-sub-label1"> Día </label>
								</span>
								<span class="form-sub-label">
									<select id="hora" name="hora"></select>
									<label class="form-sub-label1"> Hora </label>
								</span>
								<span class="form-sub-label">
									<select name="duracion" required>
										<option value="nivel-0" selected> &nbsp; </option>					
										<option value="nivel-1"> 1 Hora </option>
										<option value="nivel-2"> 1 Hora y media </option>
										<option value="nivel-3"> 2 Horas </option>
										<option value="nivel-4"> 2 Horas y media </option>
										<option value="nivel-3"> 3 Horas </option>
										<option value="nivel-4"> 3 Horas y media </option>
										<option value="nivel-3"> 4 Horas </option>
										<option value="nivel-4"> 4 Horas y media </option>																		
									</select>
									<label class="form-sub-label1"> Duración </label>
								</span>
							</div>
						</li>
					</fieldset>
					<fieldset>
						<legend align="right">JUGADORES</legend>
						<li>
							<label class="form-label">
							   Número de Jugadores:
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">
									<select name="jugadores" class="jugadores">
										<option>&nbsp;</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 8 </option>
										<option value="9"> 9 </option>
										<option value="10"> 10 </option>
									</select>
								</span>
							</div>
						</li>
						<li>
							<label class="form-label">
							   Nivel jugadores (conocimiento juego / reglas / ambientación):
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="tipo" required>
									<option value="nivel-0"> &nbsp; </option>					
									<option value="nivel-1"> 1 </option>
									<option value="nivel-2"> 2 </option>
									<option value="nivel-3"> 3 </option>
									<option value="nivel-4"> 4 </option>
								</select>
							</div>
						<li>
					</fieldset>

					<fieldset>
						<legend align="right">DESCRIPCIÓN</legend>

						<li> 
							<label class="form-label1">
								Descripción:
							</label>
							<div class="form-input2">
								<textarea rows="9" cols="20" name="descripcion"></textarea>
							
							</div>
						</li>
					</fieldset>

<div class="form-input2">
	<li> 
		<label class="form-label1">
			Por si meto para juegos que cargue de BBDD y asi esté vinculado con portada:
		</label>
								<select class="form-dropdown" name="tipo" required>
									<?php
										$names = array ("Uno"=>"Uno", "Dos"=>"Dos", "Tres"=>"Tres", "Cuatro"=>"Cuatro");


										foreach($names as $name) { ?>
											<option value="<?php echo $name ?>"> <?php echo $name ?> </option>
									<?php 
									} ?>
									
									<option value="nivel-0"> &nbsp; </option>					
									<option value="nivel-1"> Viernes </option>
									<option value="nivel-2"> Sábado </option>
									<option value="nivel-3"> Domingo </option>
								</select>
							</div>
						</li>


					</ul>
					<input type="submit" value="Quiero dirigir">
				</form>	
			</div>
		</div>
		<div class="copyright">
			<p>© 2017 Ludus Myrtea. All rights reserved | Design by <a href="https://github.com/VardenES">Varden</a></p> 
		</div>
	</div>
</body>
</html>