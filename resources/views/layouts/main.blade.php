<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Gabarito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/app.js"></script>

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-screen-icon-design-vector-png-image_1607781.jpg" width=60px>
                    <ul class="navbar-nav">
                        <li>
                            <a href="http://localhost:8989/" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="http://localhost:8989/cadastro" class="nav-link">Cadastro</a>
                        </li>
                        <li>
                            <a href="http://localhost:8989/cadastro" class="nav-link">Lista de Devs</a>
                        </li>
                        <li>
                            <a href="http://localhost:8989/contato" class="nav-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <p>DevRoberta&copy; 2023</p>
        </footer>
    </body>
</html>
