<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>

    <h1>All Comics</h1>
    <div class="container">
        @foreach ($comicsAll as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="Comic">
                <h2>{{ $comic->title }}</h2>
                <h3>{{ $comic->series }}</h3>
                <h3>{{ $comic->price }}</h3>
                <h5>{{ $comic->sale_date }}</h5>
                <div class="text">
                    <p>{{ $comic->description }}</p>
                </div>
                <div class="interaction">
                    <a href="{{ route('allComics.show', $comic->id) }}">More</a>
                    <a href="{{ route('allComics.create') }}">Crea nuovo</a>
                    <a href="{{ route('allComics.edit', $comic->id) }}">Aggiorna</a>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
