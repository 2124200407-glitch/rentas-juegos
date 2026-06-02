@extends('layouts.app')

@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Categorías
    </h2>

    <form method="POST"
          action="{{ route('categorias.guardar') }}"
          enctype="multipart/form-data">

        @csrf

        <input type="text"
               name="nombre"
               placeholder="Nombre"
               class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="file"
               name="imagen"
               class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <select name="estado"
                class="w-full p-3 rounded-lg bg-slate-700 text-white">

            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>

        </select>

        <button type="submit"
                class="w-full bg-cyan-500 py-3 rounded-lg font-bold">
            Guardar
        </button>

    </form>
@if(isset($categorias) && $categorias->count())

<h2 class="text-2xl font-bold mt-10 mb-4 text-cyan-400">
    Lista de Categorías
</h2>

<table class="w-full border border-slate-600 text-white">

    <thead class="bg-slate-700">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Imagen</th>
        </tr>
    </thead>

    <tbody>

        @foreach($categorias as $categoria)

        <tr>

            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->estado }}</td>

            <td>
                @if($categoria->imagen)
                    <img src="{{ asset('imagenes/'.$categoria->imagen) }}" width="60">
                @endif
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endif
</div>

@endsection
