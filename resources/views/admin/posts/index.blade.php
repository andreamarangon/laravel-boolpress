@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-4">
      <a class="btn btn-secondary" href="{{route('admin.posts.create')}}">Nuovo post</a>
    </div>
  </div>
  <div class="row justify-content-center">
    @foreach ($posts as $post)
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-header d-flex justify-content-center">
          <h4>{{ $post->title }}</h4>
        </div>

        <div class="card-body">
          <p>{{$post->content}}</p>
          <div class="row justify-content-around">
            <a class="btn btn-info" href="{{route('admin.posts.show',['post' =>$post->id])}}">Show</a>
            <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post'=> $post->id])}}">Edit</a>
            <a class="btn btn-danger" onclick="event.preventDefault();
                            this.nextElementSibling.submit();">Delete</a>
            <form action="{{ route('admin.posts.destroy', ['post' =>$post->id]) }}" method="POST" class="d-none">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection