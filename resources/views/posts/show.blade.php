@extends('layouts.app')
@section('content')
<br>
<a href="/posts" class="btn btn-secondary ">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" >
    <br><br>
   <div>
   {!!$post->body!!}
   </div>
   <br>
 <small>Written on {{$post->created_at}} <strong>by: {{$post->user->name}}</strong></small>
   <br>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <div style="margin:80px">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success mt-2">Edit</a>

          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-lg-right mt-2'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
        </div>
       @endif
     @endif
   @endsection




   {{-- @extends('layouts.app')
@section('content')
<br>
<a href="/posts" class="btn btn-secondary ">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:50%; height:50% " src="/storage/cover_images/{{$post->cover_image}}" >
    <br><br>
   <div>
       {!! $post->body !!}
   </div>
   <br>
 <small>Written on {{$post->created_at}} <strong>by: {{$post->user->name}}</strong></small>
   <br>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success mt-2">Edit</a>

          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-lg-right mt-2'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
       @endif
     @endif
   @endsection --}}