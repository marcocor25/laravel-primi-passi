<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            font-size: 14px;
            color: white;
        }

        a {
            text-decoration: none;
            color: currentColor;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rebeccapurple;
        }

        .content {
            width: 60vw;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            border-radius: 20px;
        }

        .content:hover .title {
            color: gold;
        }

        .title {
            font-size: 48px;
            transition: 500ms linear;
        }

        .links {
            display: flex;
            gap: 20px;
        }

        .links a {
            padding: 5px 10px;
            border: 1px solid white;
            border-radius: 20px;
            transition: 200ms linear;
        }

        .links a:hover {
            border: 1px solid gold;
            background: rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <div class="content">

        <h1 class="title">
            {{$title}}
        </h1>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>

    </div>

</body>

</html>