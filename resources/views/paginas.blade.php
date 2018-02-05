@extends('layouts.myrteahead')

			<section class="categoriasCont"> 
				
				@foreach($pages as $page)
				<article class="esparragos efecto efecto2 animate2" style="height: 430px; background-image: url({{ Voyager::image( $page->image ) }})"> 
					<a href="http://localhost/LMPArtidas/public/index.php/{{ $page->slug }}"> <span><h2>{{ $page->title }}</h2></span> </a>					
				</article> 
				@endforeach

			</section> 
			<div class="clear"></div> </div> <div class="clear"></div> 

@extends('layouts.myrteafooter')