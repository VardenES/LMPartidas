@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')

@if ( !$partidas->count() )
There is no post till now. Login and write a new post now!!!
@else
<div class="">
	@foreach( $partidas as $partida )
	<div class="list-group">
		<div class="list-group-item">
			<h3><a href="{{ url('/'.$partida->slug) }}">{{ $partida->title }}</a>
				@if(!Auth::guest() && ($partida->author_id == Auth::user()->id || Auth::user()->is_admin()))
					@if($partida->active == '1')
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$partida->slug)}}">Edit Post</a></button>
					@else
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$partida->slug)}}">Edit Draft</a></button>
					@endif
				@endif
			</h3>
			<p>{{ $partida->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$partida->author_id)}}">{{ $partida->author->name }}</a></p>
			
		</div>
		<div class="list-group-item">
			<article>
				{!! str_limit($partida->body, $limit = 1500, $end = '....... <a href='.url("/".$partida->slug).'>Read More</a>') !!}
			</article>
		</div>
	</div>
	@endforeach
	{!! $posts->render() !!}
</div>
@endif

@endsection