@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="mb-5">
            <span class="badge bg-primary">{{ $comic->type }}</span>
            <span class="fw-bold fst-italic">Series: {{ $comic->series }}</span>
        </div>

        <div class="row mb-5">
            <div class="col-md-2">
                <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
                <p class="fw-bold fst-italic mt-2">Sold to the public: {{ $comic->sale_date }}</p>
            </div>
        </div>

        <a href="{{ route('comics.index') }}">Back to the list</a>
    </div>
@endsection