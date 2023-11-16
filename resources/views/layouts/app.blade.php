<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
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
                <a href="/" class="sidebar__menu--item">
                    <i class="uil uil-estate"></i>
                    <p >Inicio</p>
                </a>
                <a href="/products" class="{{ request()->path() == 'products' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item' }}">
                    <i class="uil uil-shopping-bag"></i>
                    <p>Productos</p>
                </a>
                <a href="/categories" class="{{ request()->path() == 'categories' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item' }}">
                    <i class="uil uil-clipboard-notes"></i>
                    <p>Categorias</p>
                </a>
            </ul>

        </nav>
        
        <section class="p-8 w-full">
            @yield('header')

            @yield('content')
        </section>

    </main>
</body>
</html>
