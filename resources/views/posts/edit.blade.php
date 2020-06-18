@extends('layouts.app')

@section('content')
    <h3>Create</h3>
    
    {{ Form::open(array('url' => 'foo/bar')) }}
    {{ Form::close() }}
@endsection