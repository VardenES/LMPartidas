@extends('layouts.myrteahead')

  <section class="homeHeader"> 
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


  </section> 

@extends('layouts.myrteafooter')