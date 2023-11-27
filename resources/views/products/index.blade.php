@extends('layouts.app')
@section('header')
    <x-header-page title="Productos" path="products.create" button="Nuevo producto"
        description="Listado y gestion de productos" />
@endsection

@section('content')
    <div class="bg-soft-dark p-4 w-full overflow-x-scroll">
        <div class="min-w-min">
            <div class="grid grid-cols-7 gap-8">
                <h4>ID</h4>
                <h4>Imagen</h4>
                <h4>Nombre</h4>
                <h4>Descripcion</h4>
                <h4>Stock</h4>
                <h4>Precio</h4>
                <h4>Acciones</h4>
            </div>
            <div class=" border-t border-white/10 my-4"></div>
            <div class="space-y-4">
                @forelse ($products as $product)
                    <form method="POST" action="{{ route('products.destroy', $product->id ) }}" class="grid grid-cols-7 gap-4 items-center">
                        @method('DELETE')
                        @csrf
                        <p>#{{ $product->id }}</p>  
                        <img src="{{ $product->image }}" alt="" width="64">
                        <p>{{ $product->name }}</p>
                        <p class="line-clamp-1">{{ $product->description }}</p>
                        <p>{{ $product->stock }} u.</p>
                        <p>{{ $product->price }} Bs</p>
                        <div class=" flex items-center gap-4">
                            <a href="{{ route('products.show', $product->slug) }}" class="btn-primary-icon">
                                <i class="uil uil-eye"></i>
                            </a>
                            <a href="" class="btn-primary-icon">
                                <i class="uil uil-pen"></i>
                            </a>
                            <button class="btn-danger-icon" type="submit">
                                <i class="uil uil-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                @empty
                    <p class="text-center">No hay productos</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
