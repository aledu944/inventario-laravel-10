@extends('layouts.app')


@section('header')
    <x-header-page title="Nuevo usuario" path="users.index" button="Volver" description="Agrega un usuario al sistema" />
@endsection

@section('content')
    <form enctype="multipart/form-data" method="POST" action="{{ route('users.store') }}" class="max-w-md mx-auto space-y-4">
        @csrf
        <div class="form-control">
            <label for="name">Nombre y apellidos: </label>
            <input type="text" name="name" placeholder="Escribe el nombre del usuario">
        </div>

        <div class="form-control">
            <label for="name">Correo electronico: </label>
            <input type="email" name="email" placeholder="Ingrese el correo del usuario">
        </div>

        <div class="form-control">
            <label for="name">Cree una contraseña: </label>
            <input type="password" name="password" placeholder="Escribe una contraseña">
        </div>

        <div>
            <label for="name">Selecciona un rol: </label>
            <select class="bg-secondary w-full py-3 px-2 rounded-md" name="role_id" id="category">
                @forelse ($roles as $role)
                    <option class="text-white" value="{{ $role->id }}">{{ $role->name }}</option>
                @empty
                    <option>No se encontro categorias</option>
                @endforelse
            </select>
        </div>
        <button class="btn-primary w-full">Guardar</button>

    </form>
@endsection
