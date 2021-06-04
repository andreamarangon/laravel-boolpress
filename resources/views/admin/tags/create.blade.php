@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Nuovo tag</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{route('admin.tags.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}">
          @error('name')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button class="btn btn-primary" type="submit">Salva</button>
      </form>
    </div>
  </div>
</div>
@endsection