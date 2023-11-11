
@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row">
    @foreach ($movies as $movie)
    <div class="col-md-4 my-4 d-flex align-items-stretch">
      <div class="card">
        <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">{{ $movie->description }}</p>
          <a href="{{ route('movie-detail', $movie->id) }}" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
