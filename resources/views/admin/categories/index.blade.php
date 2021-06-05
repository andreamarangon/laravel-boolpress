@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-4">
      <a class="btn btn-secondary" href="{{route('admin.categories.create')}}">Nuova categoria</a>
    </div>
  </div>
  <div class="row justify-content-center">
    @foreach ($categories as $category)
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-header d-flex justify-content-center">{{ $category->name }}</div>

        <div class="card-body">
          <div class="row justify-content-around">
            <a class="btn btn-info" href="{{route('admin.categories.show',['category' =>$category->id])}}">Show</a>
            <a class="btn btn-primary" href="{{route('admin.categories.edit', ['category'=> $category->id])}}">Edit</a>
            <a class="btn btn-danger" onclick="event.preventDefault();
                            this.nextElementSibling.submit();">Delete</a>
            <form action="{{ route('admin.categories.destroy', ['category' =>$category->id]) }}" method="POST" class="d-none">
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