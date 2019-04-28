@extends('layouts.app')

@section('content')
    <h3>Create album</h3>
    {{ Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
        {{ Form::text('name', '', ['placeholder'=>'Album name']) }}
        {{ Form::textarea('description', '', ['placeholder'=>'Album description']) }}
        {{ Form::file('cover_image') }}        
        {{ Form::submit('Submit')}}
    {{ Form::close() }}

@endsection