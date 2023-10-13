<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Gabarito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/app.js"></script>

    </head>

    <body>
        <header>
            <div>
                <img width="100%" src="https://assets.uninove.br/headers/Programa%C3%A7%C3%A3o-para-web-Highlight.jpg?mtime=20201113122932&focal=none">
            </div>
            <nav>
                <div>
                    <a href="http://localhost:8989/">Home</a>
                </div>
                <div>
                    <a href="http://localhost:8989/contato">Contato</a>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <p>Dev Roberta &copy; 2023</p>
        </footer>
    </body>
</html>
