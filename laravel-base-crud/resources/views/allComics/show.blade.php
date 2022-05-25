<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="detail-container">
        <div class="left">
            <h1>{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="poster">
        </div>
        <a href="{{ route('allComics.index') }}">Back</a>
        <div class="right">
            <h4>Price: {{ $comic->price }}$</h4>
            <h3>Series: {{ $comic->series }}</h3>
            <h5>Sale date: {{ $comic->sale_date }}</h5>
            <h2>{{ $comic->description }}</h2>
        </div>
    </div>
</body>

</html>
