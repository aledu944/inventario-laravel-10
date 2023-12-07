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
            <div class="mb-8 flex gap-2">
                <img class="rounded-full max-w-[50px]" src="https://lh3.googleusercontent.com/a/ACg8ocK2GAvSNuwN-zRMJkMVv8UPMuwaDZVyBGHyPR-pU4ei1S4=s96-c-rg-br100" alt="" srcset="">
                <div>
                    <p class="text-gray-300">Bienvenido <span class="font-semibold">{{ auth()->user()->name }}</span></p>
                    <p class="text-sm text-gray-300">{{ auth()->user()->email }}</p>
                </div>
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
                <a href="/categories" class="{{ request()->path() == 'sales' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item' }}">
                    <i class="uil uil-shopping-cart-alt"></i>
                    <p>Ventas</p>
                </a>
                <a href="/users" class="{{ request()->path() == 'users' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item' }}">
                    <i class="uil uil-users-alt"></i>
                    <p>Usuarios</p>
                </a>
            </ul>
            <div class="flex-1"></div>
            <form method="POST" class="w-full" action="{{route('auth.logut')}}">
                @csrf
                <button type="submit" class="sidebar__menu--logout">
                    <i class="uil uil-signout"></i>
                    <p>Cerrar Sesion</p>
                </button>
            </form>

        </nav>
        
        <section class="p-8 w-full">
            @yield('header')

            @yield('content')
        </section>

    </main>
</body>
</html>
