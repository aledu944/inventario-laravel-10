<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Autenticacion - CRUD</title>
</head>


<body>
    
    <main class="auth__container">
        <section class="auth__content">
            <div class="mb-4 text-center">
                @yield('header')
            </div>

            @yield('content')
        </section>
        <section class="auth__logo">
            <h1>Control de inventario</h1>
        </section>
    </main>

</body>

</html>
