<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Meta tags -->
	<title>Responsive Form</title>
	<meta name="keywords" content="keywords 1, keywords 2, keywords 3, 
	keywords 4, keywords 5, keywords6, keywords7" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
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

					<fieldset>
						<legend align="right">PARTIDA</legend>

						<li>
							<label class="form-label"> 
								Nombre del Juego 
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
								<select class="form-dropdown" name="tipo" required>
									<option value="nivel-0"> &nbsp; </option>					
									<option value="nivel-1"> Viernes </option>
									<option value="nivel-2"> Sábado </option>
									<option value="nivel-3"> Domingo </option>
								</select>
									<label class="form-sub-label1"> Día </label>
								</span>
								<span class="form-sub-label">
									<select name="month">
										<option>&nbsp;</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
									<label class="form-sub-label1"> Hora </label>
								</span>
								<span class="form-sub-label">
									<select name="duracion" required>
										<option value="nivel-0"> &nbsp; </option>					
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