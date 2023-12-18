@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="card">
        <img src={{ $comic->src }} class="card-img-top">
        <div class="card-body">
            <h2 class="card-title">{{ $comic->title }}</h2>
            <p class="card-text">{{ $comic->description }}</p>
        </div>
    </div>
@endsection
