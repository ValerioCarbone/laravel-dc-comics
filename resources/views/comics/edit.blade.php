@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="d-flex flex-column row-gap-2 my-4">
                <label for="title">Title</label>
                <input class="align-self-start" type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div class="d-flex flex-column row-gap-2 mb-4">
                <label for="description">Description</label>
                <textarea class="align-self-start" name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>

            <div class="d-flex flex-column row-gap-2 mb-4">
                <label for="thumb">Thumbnail</label>
                <input class="align-self-start" type="text" name="src" id="thumb" value="{{ $comic->src }}">
            </div>

            <div class="d-flex flex-column row-gap-2 mb-4">
                <label for="price">Price</label>
                <input class="align-self-start" type="text" name="price" id="price" value="{{ $comic->price }}">
            </div>

            <div class="d-flex flex-column row-gap-2 mb-4">
                <label for="series">Series</label>
                <input class="align-self-start" type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="d-flex flex-column row-gap-2 mb-4">
                <label for="sale_date">Sale date</label>
                <input class="align-self-start" type="date" name="sale_date" id="sale_date"
                    value="{{ $comic->sale_date }}">
            </div>

            <div class="d-flex flex-column row-gap-2">
                <label for="type">Type</label>
                <input class="align-self-start" type="text" name="type" id="type" value="{{ $comic->type }}">
            </div>

            <input type="submit" value="Send">
        </form>
    </div>
@endsection
