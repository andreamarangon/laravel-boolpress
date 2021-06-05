@extends ('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <h2>{{$post->title}}</h2>
      <h4 class="card-body">Category:
        @if($post->category)
        <a href=" {{ route('category.index', ['slug' => $post->category->slug])}}"> {{$post->category->name}}</a>
      </h4>
      @endif
      <div>{{$post->content}}</div>

      <div>
        @foreach($post->tags as $tag)
        <a href="{{route('tag.index', ['slug'=>$tag->slug])}}">#{{$tag->name}}</a>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection