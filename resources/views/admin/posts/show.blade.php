@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">{{ $post->title }}</div>
        @if($post->category)
        <h4>{{$post->category->name}}</h4>
        @endif
        @if($post->cover)
        <img src="{{asset($post->cover)}}" alt="{{$post->title}}">
        @endif
        <div class="card-body">
          {{$post->content}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection