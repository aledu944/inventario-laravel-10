@extends('layouts.app')
@section('header')
    <x-header-page :title="$product->name" path="products.index" button="Volver" description="Detalles y caracteristicas" />
@endsection

@section('content')
    <div class="md:grid grid-cols-2">
        <div class="w-full mx-auto space-y-4">
            <div class="form-control">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" disabled value="{{ $product->name }}" placeholder="Nombre del producto">
            </div>

            <div class="form-control">
                <label for="name">Descripcion: </label>
                <textarea type="text" id="description" name="description" disabled placeholder="Detalles del producto">{{$product->description}}</textarea>
            </div>

            <div class="form-control">
                <label for="stock">Stock disponible: </label>
                <input type="number" id="stock" name="stock" disabled value="{{ $product->stock }}" placeholder="Cantidad disponible">
            </div>

            <div class="form-control">
                <label for="price">Precio: </label>
                <input type="number" step="0.01" id="price" name="price" disabled value="{{ $product->price }}" placeholder="Precio en BOB">
            </div>

            <div class="form-control">
                <label for="categoria">Categoria: </label>
                <input type="text" name="category" disabled value="{{ $product->category->name }}" placeholder="Precio en BOB">
            </div>
        </div>
        <div>
            <h3 class="text-center text-xl font-bold">Imagen del producto</h3>
            <img src="{{ '/'.$product->image }}" alt="imagen" class="w-full">
        </div>
    </div>
@endsection
