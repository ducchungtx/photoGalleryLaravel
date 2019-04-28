@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
    <a href="/" class="button secondary">Go back</a>
    <a href="/photos/create/{{$album->id}}" class="button">Upload photo to album</a>
    <hr>
    @if(count($album->photos) > 0)
    <div id="photos">
      <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
        @foreach($album->photos as $photo)
            <div class='cell'>
                <a href="/photos/{{$photo->id}}">
                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
                <br>
                <h4 class="text-center">{{$photo->title}}</h4>
            </div>
        @endforeach
      </div>
    </div>
  @else
    <p>No Albums To Display</p>
  @endif
@endsection