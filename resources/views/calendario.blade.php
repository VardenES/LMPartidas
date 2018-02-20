@extends('layouts.myrteahead')



<section class="headerDecalogo" style="background-image: url('http://www.carretilla.info/img/decalogo/header.jpg')"> > 
</section> 
<h1>Actividades</h1> 
<section class="decalogoCont">
<?php $i = 1; ?>

@foreach($actividades as $actividad)
	<a href="http://localhost/LMPArtidas/public/index.php/{{ $actividad->slug }}"> 
	<?php if($i == 1){ ?>
		<article class="efecto efecto1 animate1" style="height: 456px; background-image: url({{ $actividad->portada  }})"> 
	<?php	$i++;
	}elseif($i == 2){?>
		<article class="efecto efecto2 animate2" style="height: 456px; background-image: url({{ $actividad->portada  }})"> 
	<?php	$i++;
	}elseif($i == 3){?>
	<article class="efecto efecto3 animate3" style="height: 456px; background-image: url({{ $actividad->portada }})"> 
	<?php	$i=1;
	} ?>	
		<span> 
			<h2>{{ $actividad->nombre }}</h2> 
			<p> {{ $actividad->horario }}<?php echo "</br>".date("l h:i");?></p>
			<p> Sigue una alimentación equilibrada, variada y ajustada a tus necesidades (estado fisiológico, actividad física, sexo, edad...).</p> 
		</span> 
	</article> 
	</a>
@endforeach

	<div class="clear"></div> 
</section> 
	<div class="clear"></div> 


@extends('layouts.myrteafooter')