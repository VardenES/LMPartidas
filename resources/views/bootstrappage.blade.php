@extends('layouts.bootstrap')

@section('title', 'Título de la Página Ludus Myrtea')

@section('breadcrumbs', 'home')

@section('sidebar')
	@parent

	<p>This is appended to the master sidebar.</p>
	<div>{{ menu('actividades') }}</div>
@stop

@section('content')

<!-- Container (Laravel Section) -->
	<div id="about" class="container-fluid">
	  <div class="row slideanim">
	    <div>
			<h2>{{$name}}</h2>
			<p>This is my body content.</p>
			<h2>If Statement</h2>
			@if ($day == 'Friday')
				<p>Time to party</p>
			@else
				<p>Time to make money</p>
			@endif

			<h2>Foreach Loop</h2>
			@foreach ($drinks as $drink)
				{{$drink}} </br>
			@endforeach

{{-- This comment will not be in the rendered HTML --}}

			<h2>Execute PHP Function</h2>
			<p>The date is {{date('D M, Y')}}</p>

			<p>Ir completando diseño con: https://bootswatch.com/</p>

			<h2>Example body text</h2>
			<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
			<p><small>This line of text is meant to be treated as fine print.</small></p>
			<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
			<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
			<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
	    </div>
	  </div>
	</div>

<div>

</div>


	<div class="jumbotron text-center">
	  <h1>Company</h1> 
	  <p>We specialize in blablabla</p> 
	  <form class="form-inline">
	    <div class="input-group">
	      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-danger">Subscribe</button>
	      </div>
	    </div>
	  </form>
	</div>


<!-- Container (About Section) -->
	<div id="about" class="container-fluid">
	  <div class="row slideanim">
	    <div class="col-sm-8">
	      <h2>About Company Page</h2>
	      <h4>Lorem ipsum..</h4>
	      <p>Lorem ipsum..</p>
	      <button class="btn btn-default btn-lg">Get in Touch</button>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-signal logo"></span>
	    </div>
	  </div>
	</div>

	<div class="container-fluid bg-grey">
	  <div class="row slideanim">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-globe logo"></span>
	    </div>
	    <div class="col-sm-8">
	      <h2>Our Values</h2>
	      <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
	      <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
	    </div>
	  </div>
	</div>

<!-- Container (News Section) -->
	<div id="noticias" class="container-fluid text-center bg-grey">
	  <div class="row text-center slideanim">
		@foreach($posts as $post)
			<div class="col-md-3">
				<a href="http://localhost/LMPArtidas/public/index.php/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
	  </div>
	</div>

	<div id="noticias" class="container-fluid text-center bg-grey">
	  <h2>NOTICIAS</h2>
	  <br>
	  <div class="row slideanim">
	    @foreach($posts as $post)
	    	<div class="col-sm-4">
				<a href="http://localhost/LMPArtidas/public/index.php/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<h4>{{ $post->title }}</h4>
				</a>
	    	</div>
	    @endforeach
	</div>












<!-- Container (Services Section) -->
	<div id="services" class="container-fluid text-center">
	  <h2>SERVICES</h2>
	  <h4>What we offer</h4>
	  <br>
	  <div class="row slideanim">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-off logo-small"></span>
	      <h4>POWER</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-heart logo-small"></span>
	      <h4>LOVE</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-lock logo-small"></span>
	      <h4>JOB DONE</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	    </div>
	    <br><br>
	  <div class="row slideanim">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-leaf logo-small"></span>
	      <h4>GREEN</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-certificate logo-small"></span>
	      <h4>CERTIFIED</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-wrench logo-small"></span>
	      <h4>HARD WORK</h4>
	      <p>Lorem ipsum dolor sit amet..</p>
	    </div>
	  </div>
	</div>

<!-- Container (Portfolio Section) -->
	<div id="portfolio" class="container-fluid text-center bg-grey">
	  <h2>Portfolio</h2>
	  <h4>What we have created</h4>
	  <div class="row text-center slideanim">
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="paris.jpg" alt="Paris">
	        <p><strong>Paris</strong></p>
	        <p>Yes, we built Paris</p>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="newyork.jpg" alt="New York">
	        <p><strong>New York</strong></p>
	        <p>We built New York</p>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="sanfran.jpg" alt="San Francisco">
	        <p><strong>San Francisco</strong></p>
	        <p>Yes, San Fran is ours</p>
	      </div>
	    </div>
	  </div>
	</div>



	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
	<h2>What our customers say</h2>
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
	    </div>
	    <div class="item">
	      <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
	    </div>
	    <div class="item">
	      <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div> 

<!-- Container (Pricing Section) -->
	<div id="pricing" class="container-fluid">
	  <div class="text-center">
	    <h2>Pricing</h2>
	    <h4>Choose a payment plan that works for you</h4>
	  </div>
	  <div class="row slideanim">
	    <div class="col-sm-4 col-xs-12">
	      <div class="panel panel-default text-center">
	        <div class="panel-heading">
	          <h1>Basic</h1>
	        </div>
	        <div class="panel-body">
	          <p><strong>20</strong> Lorem</p>
	          <p><strong>15</strong> Ipsum</p>
	          <p><strong>5</strong> Dolor</p>
	          <p><strong>2</strong> Sit</p>
	          <p><strong>Endless</strong> Amet</p>
	        </div>
	        <div class="panel-footer">
	          <h3>$19</h3>
	          <h4>per month</h4>
	          <button class="btn btn-lg">Sign Up</button>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4 col-xs-12">
	      <div class="panel panel-default text-center">
	        <div class="panel-heading">
	          <h1>Pro</h1>
	        </div>
	        <div class="panel-body">
	          <p><strong>50</strong> Lorem</p>
	          <p><strong>25</strong> Ipsum</p>
	          <p><strong>10</strong> Dolor</p>
	          <p><strong>5</strong> Sit</p>
	          <p><strong>Endless</strong> Amet</p>
	        </div>
	        <div class="panel-footer">
	          <h3>$29</h3>
	          <h4>per month</h4>
	          <button class="btn btn-lg">Sign Up</button>
	        </div>
	      </div>
	    </div>
	   <div class="col-sm-4 col-xs-12">
	      <div class="panel panel-default text-center">
	        <div class="panel-heading">
	          <h1>Premium</h1>
	        </div>
	        <div class="panel-body">
	          <p><strong>100</strong> Lorem</p>
	          <p><strong>50</strong> Ipsum</p>
	          <p><strong>25</strong> Dolor</p>
	          <p><strong>10</strong> Sit</p>
	          <p><strong>Endless</strong> Amet</p>
	        </div>
	        <div class="panel-footer">
	          <h3>$49</h3>
	          <h4>per month</h4>
	          <button class="btn btn-lg">Sign Up</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>


<!-- Container (Contact Section) -->
	<div id="contact" class="container-fluid bg-grey">
	  <h2 class="text-center">CONTACT</h2>
	  <div class="row">
	    <div class="col-sm-5">
	      <p>Contact us and we'll get back to you within 24 hours.</p>
	      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
	      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
	      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
	    </div>
	    <div class="col-sm-7 slideanim">
	      <div class="row">
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
	        </div>
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	        </div>
	      </div>
	      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
	      <div class="row">
	        <div class="col-sm-12 form-group">
	          <button class="btn btn-default pull-right" type="submit">Send</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div> 


	 <!-- Add Google Maps -->
	<div id="googleMap" style="height:400px;width:100%;"></div>
	<script>
	function myMap() {
	var myCenter = new google.maps.LatLng(41.878114, -87.629798);
	var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> 
	<!--
	To use this code on your website, get a free API key from Google.
	Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
	-->




@stop