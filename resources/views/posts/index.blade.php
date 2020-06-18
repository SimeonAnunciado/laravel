@extends('layouts.app')

@section('content')
    <ul class="list-group">
      

        @if (count($posts) > 0 )
            @foreach ($posts as $post)
                 <li class="list-group-item">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title  }}</a></h3> 
                    <small>written {{$post->created_at }}</small>
                </li> 
            @endforeach
            <br>
            {{ $posts->links() }}
        @else
        <p>No Data Found</p>
    
@endif

</ul>
    
@endsection