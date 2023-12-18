@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style ="width: 600px;">
                <img src={{ $comic->src }} class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">{{ $comic->title }}</h2>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p>
                    <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Price: {{ $comic->price }}</p>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
