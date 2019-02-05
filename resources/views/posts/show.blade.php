@extends('layouts.app')
@section('content')
  <a href="/posts" class="btn btn-default">Go back</a>
  <h1 class="showPost__title">{{$post->title}}</h1>
  <div>
    {!! $post->body !!}
    <img style="width:50px" src="/storage/cover_images/{!! $post->cover_image !!}">
  </div>
  <hr>
<small>Written on {{$post->created_at}} by {{Auth::user()->name}}. Category: {{$post->cat}}</small>
  <hr>

  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
  <a href="/posts/{{$post->id}}/edit" class="float-left btn btn-default">Edit Post</a>
  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left'])!!}
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!! Form::close() !!}
  @endif
  @endif
@endsection