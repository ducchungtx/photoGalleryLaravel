@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <div id="albums">
      <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
        @foreach($albums as $album)          
            <div class='cell'>
                <a href="/albums/{{$album->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
                <br>
                <h4 class="text-center">{{$album->name}}</h4>
            </div>
        @endforeach
      </div>
    </div>
  @else
    <p>No Albums To Display</p>
  @endif

@endsection
