<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('allComics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" value="{{ $comic->title }}">
            <label for="title">Title</label>
        </div>
        <div>
            <input type="url" name="thumb" value="{{ $comic->image }}">
            <label for="thumb">Link</label>
        </div>
        <div>
            <input type="number" name="price" value="{{ $comic->price }}">
            <label for="price">Price</label>
        </div>
        <div>
            <textarea name="description"></textarea>
            <label for="description">Description</label>
        </div>
        <div>
            <input type="text" name="series" value="{{ $comic->series }}">
            <label for="series">Series</label>
        </div>
        <div>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
            <label for="sale_date">Sale Date</label>
        </div>
        <div>
            <input type="text" name="type" value="{{ $comic->type }}">
            <label for="type">Type</label>
        </div>


        <button type="submit">Invia</button>
    </form>

</body>

</html>
