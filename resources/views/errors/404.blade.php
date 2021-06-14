@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <h1>404</h1>

        <p class="mb-5">Oh No! Something went wrong! We don't found your request! Superman where are you?!?</p>

        <a href="{{ route('home') }}">Back to Home</a>
    </div>
@endsection