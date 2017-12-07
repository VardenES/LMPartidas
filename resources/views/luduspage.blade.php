@extends('layouts.ludus')

@section('title', 'Page Title')

@section('sidebar')
	<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
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

	<h2>Execute PHP Function</h2>
	<p>The date is {{date('D M, Y')}}</p>







<div class="amy-shortcode amy-tab amy-tab-default amy-tab-">
	<div class="amy-tab-nav bs-tab-nav">
		<ul>
			<li><a data-toggle="tab" href="#viernes">Viernes</a></li>
			<li><a data-toggle="tab" href="#sabado">Sábado</a></li>
			<li><a data-toggle="tab" href="#domingo">Domingo</a></li>
		</ul>
	</div>

	<div class="amy-tab-contents">

		<div id="viernes" class="amy-tab-content active">
			<div class="amy-shortcode amy-mv-grid layout2">
				<div class="row amy-ajax-content">

													<div class="col-md-3 grid-item" onclick="">
														<article class="entry-item">
															<div class="front">
																<div class="entry-thumb">
																	<img width="360" height="618" src="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg" class="attachment-360x618 size-360x618" alt="" srcset="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg 360w, http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-175x300.jpg 175w" sizes="(max-width: 360px) 100vw, 360px" />
																</div>
																<h4 class="entry-title">The Girl On The Train</h4>
																<div class="entry-genre">
																	<a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a>
																</div>
															</div>
															<div class="back">
																<h3 class="entry-title">
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/">The Girl On The Train</a>
																</h3>
																<span class="pg">G</span>
																<div class="entry-time"><i class="fa fa-clock-o"></i>02 hours 50 minutes</div>
																<p>
																	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ...</p>
																</p>
																<div class="entry-button">
																	<a href="https://player.vimeo.com/video/38156752" class="fancybox.iframe amy-fancybox"><i aria-hidden="true" class="fa fa-play"></i>Trailer</a>
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/"><i aria-hidden="true" class="fa fa-exclamation"></i>Detail</a>
																</div>
																<div class="movie-char-info">
																	<div class="movie-char-info-left">
																		<h6>Director</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-director/kingia-rogers/">Kingia Rogers</a></p>
																	</div>
																	<div class="movie-char-info-right">
																		<h6>Genre</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a></p>
																	</div>
																	<div class="clearfix"></div>
																</div>
																<div class="entry-rating">
																	<ul class="mv-rating-stars">
																		<li class="mv-current-rating" data-point="88%"></li>
																	</ul>
																	<span class="mcount">92 votes</span>
																	<span class="rate">4.4</span>
																</div>
															</div>
														</article>
													</div>




													<div class="col-md-3 grid-item" onclick="">
														<article class="entry-item">
															<div class="front">
																<div class="entry-thumb">
																	<img width="360" height="618" src="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg" class="attachment-360x618 size-360x618" alt="" srcset="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg 360w, http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-175x300.jpg 175w" sizes="(max-width: 360px) 100vw, 360px" />
																</div>
																<h4 class="entry-title">The Girl On The Train</h4>
																<div class="entry-genre">
																	<a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a>
																</div>
															</div>
															<div class="back">
																<h3 class="entry-title">
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/">The Girl On The Train</a>
																</h3>
																<span class="pg">G</span>
																<div class="entry-time"><i class="fa fa-clock-o"></i>02 hours 50 minutes</div>
																<p>
																	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ...</p>
																</p>
																<div class="entry-button">
																	<a href="https://player.vimeo.com/video/38156752" class="fancybox.iframe amy-fancybox"><i aria-hidden="true" class="fa fa-play"></i>Trailer</a>
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/"><i aria-hidden="true" class="fa fa-exclamation"></i>Detail</a>
																</div>
																<div class="movie-char-info">
																	<div class="movie-char-info-left">
																		<h6>Director</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-director/kingia-rogers/">Kingia Rogers</a></p>
																	</div>
																	<div class="movie-char-info-right">
																		<h6>Genre</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a></p>
																	</div>
																	<div class="clearfix"></div>
																</div>
																<div class="entry-rating">
																	<ul class="mv-rating-stars">
																		<li class="mv-current-rating" data-point="88%"></li>
																	</ul>
																	<span class="mcount">92 votes</span>
																	<span class="rate">4.4</span>
																</div>
															</div>
														</article>
													</div>



													<div class="col-md-3 grid-item" onclick="">
														<article class="entry-item">
															<div class="front">
																<div class="entry-thumb">
																	<img width="360" height="618" src="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg" class="attachment-360x618 size-360x618" alt="" srcset="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1.jpg 360w, http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-175x300.jpg 175w" sizes="(max-width: 360px) 100vw, 360px" />
																</div>
																<h4 class="entry-title">The Girl On The Train</h4>
																<div class="entry-genre">
																	<a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a>
																</div>
															</div>
															<div class="back">
																<h3 class="entry-title">
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/">The Girl On The Train</a>
																</h3>
																<span class="pg">G</span>
																<div class="entry-time"><i class="fa fa-clock-o"></i>02 hours 50 minutes</div>
																<p>
																	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ...</p>
																</p>
																<div class="entry-button">
																	<a href="https://player.vimeo.com/video/38156752" class="fancybox.iframe amy-fancybox"><i aria-hidden="true" class="fa fa-play"></i>Trailer</a>
																	<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/"><i aria-hidden="true" class="fa fa-exclamation"></i>Detail</a>
																</div>
																<div class="movie-char-info">
																	<div class="movie-char-info-left">
																		<h6>Director</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-director/kingia-rogers/">Kingia Rogers</a></p>
																	</div>
																	<div class="movie-char-info-right">
																		<h6>Genre</h6>
																		<p><a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a></p>
																	</div>
																	<div class="clearfix"></div>
																</div>
																<div class="entry-rating">
																	<ul class="mv-rating-stars">
																		<li class="mv-current-rating" data-point="88%"></li>
																	</ul>
																	<span class="mcount">92 votes</span>
																	<span class="rate">4.4</span>
																</div>
															</div>
														</article>
													</div>








				</div>
			</div>
		</div>










		<div id="sabado" class="amy-tab-content active">
			<div class="amy-shortcode amy-mv-grid layout2">
				<div class="row amy-ajax-content">
					<div class="col-md-4 grid-item">
						<article class="entry-item">
							<div class="entry-thumb">
								<img width="164" height="220" src="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-164x220.jpg" class="attachment-164x220 size-164x220" alt="" srcset="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-164x220.jpg 164w, http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-118x159.jpg 118w" sizes="(max-width: 164px) 100vw, 164px" />
							</div>
							<div class="entry-content">
								<h4 class="entry-title">
									<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/">The Girl On The Train</a>
								</h4>
								<div class="entry-date"><i class="fa fa-clock-o"></i>02 hours 50 minutes</div>
								<div class="desc-mv">
									<div><span>Release:</span>May 12, 2017</div>
									<div class="note"><span>Genre:</span><a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a></div>
									<div><span>Language:</span>English</div>
								</div>
								<div class="entry-rating">
									<ul class="mv-rating-stars">
										<li class="mv-current-rating" data-point="88%"></li>
									</ul>
									<span class="mcount">92 votes</span>
									<span class="rate">4.4</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</article>
					</div>
				</div>
			</div>
		</div>


		<div id="domingo" class="amy-tab-content active">
			<div class="amy-shortcode amy-mv-grid layout2">
				<div class="row amy-ajax-content">
					<div class="col-md-4 grid-item">
						<article class="entry-item">
							<div class="entry-thumb">
								<img width="164" height="220" src="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-164x220.jpg" class="attachment-164x220 size-164x220" alt="" srcset="http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-164x220.jpg 164w, http://demo.amytheme.com/movie/home2/wp-content/uploads/2016/12/img_1-118x159.jpg 118w" sizes="(max-width: 164px) 100vw, 164px" />
							</div>
							<div class="entry-content">
								<h4 class="entry-title">
									<a href="http://demo.amytheme.com/movie/home2/amy-movie/the-girl-on-the-train/">Domingo</a>
								</h4>
								<div class="entry-date"><i class="fa fa-clock-o"></i>02 hours 50 minutes</div>
								<div class="desc-mv">
									<div><span>Release:</span>May 12, 2017</div>
									<div class="note"><span>Genre:</span><a href="http://demo.amytheme.com/movie/home2/amy-genre/drama/">Drama</a></div>
									<div><span>Language:</span>English</div>
								</div>
								<div class="entry-rating">
									<ul class="mv-rating-stars">
										<li class="mv-current-rating" data-point="88%"></li>
									</ul>
									<span class="mcount">92 votes</span>
									<span class="rate">4.4</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</article>
					</div>
				</div>
			</div>
		</div>


	</div>




@endsection