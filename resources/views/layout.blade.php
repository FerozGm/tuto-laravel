<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/a-propos">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clients">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/la-sousoupe">A la soupe</a>
                </li>
            </ul>

            @yield('content')
        </div>
    </body>
</html>
