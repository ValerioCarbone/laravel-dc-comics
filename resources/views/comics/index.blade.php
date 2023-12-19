@extends('layouts.app')

@section('title', 'DC Comics')

@section('content')
    <div class="container">
        <h2 class="text-center mb-3">Comics</h2>
        <div class="row justify-content-center mb-3">
            <a href="{{ route('comics.create') }}" class="btn-primary btn btn-sm" style="width: 100px;">Insert
                comic</a>
        </div>
        <div class="row row-gap-3">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <a href="{{ route('comics.show', $comic) }}">
                            <img style="width: 100%;" class="img-fluid" src={{ $comic->src }}>
                        </a>
                        <div class="card-body">
                            <h3>{{ $comic->title }}</h3>
                            <p class="card-text">{{ $comic->series }}</p>
                            <p class="card-text">{{ $comic->type }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
