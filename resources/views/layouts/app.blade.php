<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    @vite('resources/css/app.css')
    <title>Laravel - CRUD</title>
</head>

<body>
    <main class="flex">

        <nav class="sidebar">
            <div class="mb-8">
                <h3 class="font-semibold text-xl">
                    Inventario Laravel
                </h3>
                <p class="text-sm text-gray-300">Bienvenido al sistema</p>
            </div>

            <ul class="sidebar__menu">
                <li class="sidebar__menu--item">
                    <i class="uil uil-estate"></i>
                    <a href="/">Inicio</a>
                </li>
                <li class="sidebar__menu--item">
                    <i class="uil uil-shopping-bag"></i>
                    <a href="/products">Productos</a>
                </li>
                <li class="sidebar__menu--item">
                    <i class="uil uil-clipboard-notes"></i>
                    <a href="/categories">Categorias</a>
                </li>
            </ul>

        </nav>

        <section class="p-8">
            <div>
                <h1 class="font-bold text-3xl">
                    @yield('title')
                </h1>
                <p>@yield('subtitle')</p>
                
            </div>

            @yield('content')
        </section>

    </main>
</body>

</html>
