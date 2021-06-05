@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-center">
          <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body d-flex justify-content-center">
          @if($post->category)
          <h4>{{$post->category->name}}</h4>
          @endif
        </div>
        @if($post->cover)
        <img src="{{asset($post->cover)}}" alt="{{$post->title}}">
        @endif
        <div class="card-body">
          <p>{{$post->content}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection