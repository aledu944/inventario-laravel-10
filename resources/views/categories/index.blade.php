@extends('layouts.app')

@section('header')
    <x-header-page title="Categorias" path="categories.create" button="Nueva categoria"
        description="Listado y gestion de categorias" />
@endsection

@section('content')
    <div class="bg-soft-dark p-4 w-full">
        <div class="grid grid-cols-5 gap-8">
            <h4>ID</h4>
            <h4>Imagen</h4>
            <h4>Nombre</h4>
            <h4 class="col-span-2">Acciones</h4>
        </div>
        <div class=" border-t border-white/10 my-4"></div>
        
        <div class="space-y-4">
            @forelse($categories as $category)
                <form method="POST" action="{{ route('categories.destroy', $category->id) }}"
                    class="grid grid-cols-5 gap-8 items-center">
                    @method('DELETE')
                    @csrf

                    <p>#{{ $category->id }}</p>

                    <img src="{{ $category->image }}" alt="" width="64">

                    <p>{{ $category->name }}</p>

                    <div class="col-span-2 flex items-center gap-4">
                        <a class="btn-primary-icon" href="{{ route('categories.edit', $category->id ) }}">
                            <i class="uil uil-pen"></i>
                        </a>
                        <button class="btn-danger-icon" type="submit">
                            <i class="uil uil-trash-alt"></i>
                        </button>
                    </div>
                </form>
            @empty
        </div>

    </div>
    <p class="text-center">No se encontro categorias</p>
    @endforelse
@endsection
