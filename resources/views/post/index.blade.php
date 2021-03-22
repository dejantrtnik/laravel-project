@extends('layouts.app')

@section('body')
     @if (count($posts) > 0)
          <div class="well">
               @foreach ($posts as $post)
                    <h3><a href="">{{ $post->title }}</a></h3>
     
               @endforeach 
          </div>

     @else
          <p>No posts</p>
     @endif

@endsection
