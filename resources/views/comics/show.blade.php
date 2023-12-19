@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('comics.index') }}" class=" text-center my-3 btn-sm btn-secondary">Home</a>
            <div class="card" style ="width: 600px;">
                <img src={{ $comic->src }} class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <div>
                            <a class="btn btn-sm btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a>
                            <a class="btn btn-sm btn-primary" href="">Delete</a>
                        </div>
                    </div>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p>
                    <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Price: {{ $comic->price }}$</p>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
