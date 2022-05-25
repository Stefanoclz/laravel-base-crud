<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        a {
            padding: 10px 20px;
            border: 1px solid white;
            background-color: rgba(27, 108, 155, 0.5);
            border-radius: 15px;
            text-decoration: none;
            color: black;
            font-size: 40px;
        }

        .container-start {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://f.vividscreen.info/soft/0202fbf665fad76e9a52368455963b79/DC-Comics-Superheroes-1920x1200.jpg);
            height: 100%;
        }

    </style>
</head>

<body>
    <div class="container-start">
        <a href="{{ route('allComics.index') }}">Open DC Comics Shop</a>
    </div>
</body>

</html>
