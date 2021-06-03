@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Nuovo post</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('admin.posts.update', ['post'=> $post->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control @error('category') is-invalid @enderror" name="category_id" id="category">
                    <option value="">Select</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title', $post->title)}}">
                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content">{{old('content', $post->content)}}</textarea>
                    @error('content')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                   <img class="img-fluid" src="{{asset($post->cover)}}" alt=""> 
                </div>
                <div class="form-group">
                    <label for="content">Cover</label>
                    <input class="form-control-file @error('cover') is-invalid @enderror" type="file" name="cover" value="">
                    @error('cover')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection