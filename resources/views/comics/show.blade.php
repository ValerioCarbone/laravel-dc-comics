@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container" id="app">
        <div class="row justify-content-center">
            <a href="{{ route('comics.index') }}" class=" text-center my-3 btn-sm btn-secondary">Home</a>
            <div class="card" style ="width: 600px;">
                <img src={{ $comic->src }} class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <div class="d-flex column-gap-2">
                            <a class="btn btn-sm btn-primary align-self-start"
                                href="{{ route('comics.edit', $comic) }}">Edit</a>
                            <button type="button" class="btn btn-sm btn-primary align-self-start" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                Delete
                            </button>
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
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-flex flex-column">
                    @csrf
                    @method('DELETE')
                    <label for="delete" class="text-center my-4">Are you sure to delete this item?</label>
                    <input type="submit" id="delete" value="Delete"
                        class="btn btn-sm btn-primary align-self-center mb-4">
                </form>
            </div>
        </div>
    </div>
    <script src="./././js/app.js"></script>
@endsection
