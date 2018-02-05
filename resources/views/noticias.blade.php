@extends('layouts.myrteahead')

			<section class="categoriasCont"> 
				
				@foreach($posts as $post)
				<article class="esparragos efecto efecto2 animate2" style="height: 430px; background-image: url({{ Voyager::image( $post->image ) }})"> 
					<a href="http://localhost/LMPArtidas/public/index.php/post/{{ $post->slug }}"> <span><h2>{{ $post->title }}</h2></span> </a>					
				</article> 
				@endforeach

			</section> 
			<div class="clear"></div> </div> <div class="clear"></div> 

@extends('layouts.myrteafooter')