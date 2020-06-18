@extends('layouts.app')

@section('content')
    
    <a href="/posts" class="btn btn-primary"> BACK</a>
    <br><br>
    <h3>{!! $post->title !!}</h3>
    <p> {!! $post->body !!}</p>
    <hr>
    <small> {!! $post->created_at !!}</small>
    <br>
    <br>

    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary"> Edit </a>
    
@endsection