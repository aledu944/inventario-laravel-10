@extends('layouts.auth')


@section('header')
    <h1>Inicia Sesion</h1>
    <p>Comienza a gestionar tu inventario</p>
@endsection


@section('content')
    <form novalidate method="POST" action="{{ route('auth.store') }}" class="auth__login--form">
        @csrf
        
        @if (session('mensaje'))
            <p class="text-red-500">{{ session('mensaje') }}</p>
        @endif

        <div class="form-control">
            <label for="">Correo electronico: </label>
            <input 
                name="email" 
                type="email" 
                value="{{ old('email') }}"
                placeholder="correo@example.com"
                class="@error('email') input-error @enderror"
            >
            @error('email')
                <p class="alert">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-control">
            <label for="">Contraseña: </label>
            <input 
                name="password" 
                type="password" 
                placeholder="Tu contraseña"
                class="@error('email') input-error @enderror"
            >
            @error('password')
                <p class="alert">{{ $message }}</p>
            @enderror
        </div>
        <button class="btn-primary w-full">Iniciar sesion</button>
    </form>
@endsection
