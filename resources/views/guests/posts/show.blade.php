@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h2>{{$post->title}}</h2>
            <div>{{$post->content}}</div>
        </div>
    </div>
</div>
@endsection