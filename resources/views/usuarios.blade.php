<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br>{!! menu('admin', 'admin_menu') !!}<br>
		<br>{!! menu('admin') !!}<br>
		<div class="row">
		@foreach($usuarios as $usuario)
			<div class="col-md-12">								
					<span>{{ $usuario->name }} - </span>
					<span>{{ $usuario->gender }} - </span>
					<span>{{ $usuario->poblacion }}</span>				
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>