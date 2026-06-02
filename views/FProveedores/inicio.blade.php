@extends('layouts.app')

@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Proveedores
    </h2>

    <form method="POST"
          action="{{ route('proveedores.guardar') }}"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="text" name="nombre" placeholder="Nombre"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="text" name="telefono" placeholder="Teléfono"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="email" name="correo" placeholder="Correo"
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

            Guardar

        </button>

    </form>
@if(isset($proveedores) && $proveedores->count())

<table class="w-full border border-slate-600 text-white mt-10">

    <thead class="bg-slate-700">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Imagen</th>
        </tr>

    </thead>

    <tbody>

        @foreach($proveedores as $proveedor)

        <tr>

            <td>{{ $proveedor->id }}</td>
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->correo }}</td>
            <td>{{ $proveedor->estado }}</td>

            <td>
                @if($proveedor->imagen)
                    <img src="{{ asset('imagenes/'.$proveedor->imagen) }}" width="60">
                @endif
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endif
</div>

@endsection