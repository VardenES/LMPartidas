    @extends('app')
    @section('title')
    {{$title}}
    @endsection
    @section('content')
    @if ( !$actividades->count() )
    There is no post till now. Login and write a new post now!!!
    @else
    <div class="">
      @foreach( $actividades as $actividad )
      <div class="list-group">
        <div class="list-group-item">
          <h3><a href="{{ url('/'.$post->slug) }}">{{ $actividad->title }}</a>
            @if(!Auth::guest() && ($actividad->author_id == Auth::user()->id || Auth::user()->is_admin()))
              @if($actividad->active == '1')
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$actividad->slug)}}">Edit Activity</a></button>
              @else
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$actividad->slug)}}">Edit Draft</a></button>
              @endif
            @endif
          </h3>
          <p>{{ $actividad->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$actividad->author_id)}}">{{ $actividad->author->name }}</a></p>
        </div>
        <div class="list-group-item">
          <article>
            {!! str_limit($actividad->body, $limit = 1500, $end = '....... <a href='.url("/".$actividad->slug).'>Read More</a>') !!}
          </article>
        </div>
      </div>
      @endforeach
      {!! $actividades->render() !!}
    </div>
    @endif
    @endsection
