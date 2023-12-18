@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>

            <div class="mb-3">
                <label for="thumb">Thumbnail</label>
                <input type="text" name="src" id="thumb">
            </div>

            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>

            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale date</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" name="type" id="type">
            </div>

            <input type="submit" value="Send">
        </form>
    </div>
@endsection
