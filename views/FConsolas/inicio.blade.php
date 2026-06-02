@extends('plantilla.base')
@extends('layouts.app')
@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Formulario Consolas
    </h2>

  <form method="POST"
      action="{{ route('consolas.guardar') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="text"
           name="nombre"
           placeholder="Nombre de la consola">

    <input type="text"
           name="fabricante"
           placeholder="Fabricante">

    <input type="file"
           name="imagen">

    <select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <button type="submit">
        Guardar Consola
    </button>

    @if(isset($consolas) && $consolas->count())

<h2 class="text-2xl font-bold mt-10 mb-4 text-cyan-400">
    Lista de Consolas
</h2>

<table class="w-full border border-slate-600 text-white">

    <thead class="bg-slate-700">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fabricante</th>
            <th>Estado</th>
            <th>Imagen</th>
        </tr>
    </thead>

    <tbody>

        @foreach($consolas as $consola)

        <tr>

            <td>{{ $consola->id }}</td>
            <td>{{ $consola->nombre }}</td>
            <td>{{ $consola->fabricante }}</td>
            <td>{{ $consola->estado }}</td>

            <td>
                @if($consola->imagen)
                    <img src="{{ asset('imagenes/'.$consola->imagen) }}" width="60">
                @endif
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endif
</form>

@endsection