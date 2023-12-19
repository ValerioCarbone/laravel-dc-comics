@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.//') }}" method="post">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb">Thumbnail</label>
                <input type="text" name="src" id="thumb" value="{{ $comic->src }}">
            </div>

            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" value="{{ $comic->type }}">
            </div>

            <input type="submit" value="Send">
        </form>
    </div>
@endsection
