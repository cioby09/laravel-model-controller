@extends('layouts.app')

@section('content')
    <h1 class="text-center">Movies</h1>
    <div class="comic-container py-4">
        <div class="container">
            <div class="row row-cols-5 g-3">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $movie->image }}" alt="">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
