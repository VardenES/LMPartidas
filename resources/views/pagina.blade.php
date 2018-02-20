@extends('layouts.myrteahead')

		<div class="wrapper"> 
			<section class="productInfo"> 
				<article class="imagenPrincipal"> 
					<a href="javascript:goBack()">VOLVER</a> 
					
<script>
function goBack() {
    window.history.back();
}
</script>
					<img class="principal" src="http://www.carretilla.info/img/platos/esparragos-blancos-enteros-extra.png"> 
					<?php //{{ Voyager::image( $post->image ) }}?>
				</article> 
				<article class="textoPrincipal"> 
					<aside class="etiqueta"> 
						<h1>{{ $page->title }}</h1> 
						<h2>Nombre del juego</h2> 
						<p>Información complementaria, número jugadores, etc.</p> 
						<div class="clear"></div> 
					</aside> 
					<aside class="pictos"><p>Información complementaria</p>
					</aside> 
				</article> 
				<article class="infoPrincipal"> 

					<div style="display: block;"> 
						<p>{!! $page->body !!}</p>
						<p>Conservar
		 a temperatura ambiente en un lugar fresco y seco. Una vez abierto, si 
		no se consume en su totalidad, mantener el producto restante 
		refrigerado, procurando que el líquido de gobierno cubra los espárragos.
		 Si es un envase de lata, pasarlos a un envase plástico o de cristal 
		para su conservación en refrigerado. Sugerimos consumir como máximo al 
		día siguiente de su apertura.</p> </br>
<img class="principal" src="http://www.carretilla.info/img/platos/esparragos-blancos-enteros-extra.png">
<p>Conservar
		 a temperatura ambiente en un lugar fresco y seco. Una vez abierto, si 
		no se consume en su totalidad, mantener el producto restante 
		refrigerado, procurando que el líquido de gobierno cubra los espárragos.
		 Si es un envase de lata, pasarlos a un envase plástico o de cristal 
		para su conservación en refrigerado. Sugerimos consumir como máximo al 
		día siguiente de su apertura.</p> </br>

<p>Conservar
		 a temperatura ambiente en un lugar fresco y seco. Una vez abierto, si 
		no se consume en su totalidad, mantener el producto restante 
		refrigerado, procurando que el líquido de gobierno cubra los espárragos.
		 Si es un envase de lata, pasarlos a un envase plástico o de cristal 
		para su conservación en refrigerado. Sugerimos consumir como máximo al 
		día siguiente de su apertura.</p> 


<p>Conservar
		 a temperatura ambiente en un lugar fresco y seco. Una vez abierto, si 
		no se consume en su totalidad, mantener el producto restante 
		refrigerado, procurando que el líquido de gobierno cubra los espárragos.
		 Si es un envase de lata, pasarlos a un envase plástico o de cristal 
		para su conservación en refrigerado. Sugerimos consumir como máximo al 
		día siguiente de su apertura.</p> </br>				

					</div> 
	

				</article> 
				<div class="clear"></div> 
			</section> 
		</div>

			<div class="clear"></div> </div> <div class="clear"></div> 

@extends('layouts.myrteafooter')



