@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">{{ $tag->name }}</div>

      </div>
    </div>
  </div>
</div>
@endsection