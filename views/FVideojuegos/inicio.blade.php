@extends('/plantilla/base')
@section('dinamico')
@extends('layouts.app')



<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Formulario Videojuegos
    </h2>

    <form method="POST"
          action="{{ route('videojuegos.guardar') }}"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="text" name="titulo" placeholder="Título"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="text" name="genero" placeholder="Género"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" step="0.01" name="precio_renta" placeholder="Precio de renta"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="text" name="clasificacion" placeholder="Clasificación"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" name="stock" placeholder="Stock"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" name="consola_id" placeholder="Consola ID"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="file" name="imagen"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <select name="estado"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>

        </select>

        <button type="submit"
            class="w-full bg-cyan-500 py-3 rounded-lg font-bold">

            Guardar Videojuego

        </button>

    </form>
    @if(isset($videojuegos) && $videojuegos->count())

<table class="w-full border border-slate-600 text-white mt-10">

    <thead class="bg-slate-700">

        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Género</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
            <th>Imagen</th>
        </tr>

    </thead>

    <tbody>

        @foreach($videojuegos as $videojuego)

        <tr>

            <td>{{ $videojuego->id }}</td>
            <td>{{ $videojuego->titulo }}</td>
            <td>{{ $videojuego->genero }}</td>
            <td>{{ $videojuego->precio_renta }}</td>
            <td>{{ $videojuego->stock }}</td>
            <td>{{ $videojuego->estado }}</td>

            <td>
                @if($videojuego->imagen)
                    <img src="{{ asset('imagenes/'.$videojuego->imagen) }}" width="60">
                @endif
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endif
</div>

@endsection