@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">{{ $post->title }}</div>
          @if($post->category)
          <a href=" {{ route('category.index', ['slug' => $post->category->slug])}}"> {{$post->category->name}}</a></h4>
          @endif

        <div class="card-body">
          {{$post->content}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection