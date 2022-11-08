<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Новости</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/about">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Контакты</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Введите запрос" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Поиск
                </button>
            </form>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
