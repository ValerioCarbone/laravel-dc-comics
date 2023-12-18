@extends('layouts.app')

@section('content')
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="thumb">Thumbnail</label>
        <input type="text" name="src" id="thumb">

        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <label for="series">Series</label>
        <input type="text" name="series" id="series">

        <label for="sale_date">Sale date</label>
        <input type="text" name="sale_date" id="sale_date">sale_date

        <label for="typw">Type</label>
        <input type="text" name="typw" id="typw">

        <input type="submit" value="Send">
    </form>
@endsection
