@extends('layouts.app')

@section('header')
    <x-header-page title="Usuarios" path="users.create" button="Agregar usuario"
        description="Gestion de usuarios del sistema" />
@endsection


@section('content')
    <div class="table">
        <div class="min-w-min">
            <div class="users__table--header">
                <h4>ID</h4>
                <h4>Nombre</h4>
                <h4 class="col-span-2">Correo</h4>
                <h4>Rol</h4>
                <h4>Acciones</h4>
            </div>
            <div class="divider"></div>
            <div class="space-y-4">
                @forelse ($users as $user)
                    <form method="POST" action="{{ route('users.destroy', $user->id ) }}" class="users__table--items">
                        @method('DELETE')
                        @csrf
                        <p>#{{ $user->id }}</p>  
                        <p>{{ $user->name }}</p>
                        <p class="col-span-2">{{ $user->email }}</p>
                        <p>{{ $user->role_id == '1' ? 'Admin' : 'Empleado' }}</p>
                        <div class=" flex items-center gap-4">
                            <a href="" class="btn-primary-icon">
                                <i class="uil uil-pen"></i>
                            </a>
                            <button class="btn-danger-icon" type="submit">
                                <i class="uil uil-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                @empty
                    <p class="text-center">No hay usuarios</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
