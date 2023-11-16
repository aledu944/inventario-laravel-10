@extends('layouts.auth')


@section('header')
    <h1>Inicia Sesion</h1>
    <p>Comienza a gestionar tu inventario</p>
@endsection


@section('content')
    <form action="" class="auth__login--form">
        <div class="form-control">
            <label for="">Correo electronico: </label>
            <input type="email" placeholder="correo@example.com">
        </div>
        <div class="form-control">
            <label for="">Contraseña: </label>
            <input type="password" placeholder="Tu contraseña">
        </div>
        <button class="btn-primary w-full">Iniciar sesion</button>
    </form>
@endsection

