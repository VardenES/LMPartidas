<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br><br>
		<div class="row">
		@foreach($actividades as $actividad)
			<div class="col-md-3">
				<a href="http://localhost/LMPArtidas/public/index.php/actividad/{{ $actividad->slug }}">
					<img src="<?php //{{ Voyager::image( $actividad->image ) }}?>" style="width:100%">
					<span>{{ $actividad->nombre }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>