
@extends('layouts.app')
@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Sucursales
    </h2>

   <form method="POST"
      action="{{ route('sucursales.guardar') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="text" name="nombre" placeholder="Nombre">

    <input type="text" name="ciudad" placeholder="Ciudad">

    <input type="text" name="direccion" placeholder="Dirección">

    <input type="file" name="imagen">

    <select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <button type="submit">
        Guardar
    </button>

</form>
@if(isset($sucursales) && $sucursales->count())

<table class="w-full border border-slate-600 text-white mt-10">

@foreach($sucursales as $sucursal)

<tr>
    <td>{{ $sucursal->id }}</td>
    <td>{{ $sucursal->nombre }}</td>
    <td>{{ $sucursal->ciudad }}</td>
    <td>{{ $sucursal->direccion }}</td>
    <td>{{ $sucursal->estado }}</td>
</tr>

@endforeach

</table>

@endif
</div>

@endsection