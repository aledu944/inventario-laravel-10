@extends('layouts.app')

@section('header')
    <x-header-page title="Edita la categoria" path="categories.index" button="Volver"
        description="Edita la categoria {{ $category->name }}" />
@endsection

@section('content')
    <form action="{{ route('categories.update', $category->id )}}" class="max-w-md mx-auto space-y-4" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf
        <div class="form-control">
            <label for="name">Nombre: </label>
            <input type="text" name="name" value="{{ $category->name }}">
        </div>


        <div class="form-control">
            <label for="image">Selecciona una imagen: </label>
            <input type="file" name="image" value="{{ $category->image}}">
        </div>

        <button class="btn-primary w-full">Guardar</button>
    </form>
@endsection