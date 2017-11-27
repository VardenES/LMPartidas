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
		@foreach($posts as $post)
			<div class="col-md-3">
				<span>{{ $post->category_id }}</span>
				<a href="http://localhost/LMPArtidas/public/index.php/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
					<span>{{ $post->meta_keywords }}</span>
					<span><?php var_dump($post->meta_keywords); ?></span>
					@if ($post->meta_keywords == "Partida de Rol")
						<p>Que cabrones, que van a jugar!</p>


					@endif
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>