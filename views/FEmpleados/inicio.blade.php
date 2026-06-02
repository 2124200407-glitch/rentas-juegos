@extends('layouts.app')

@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Empleados
    </h2>

    <form method="POST"
          action="{{ route('empleados.guardar') }}"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="text" name="nombre" placeholder="Nombre"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="text" name="apellido" placeholder="Apellido"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="text" name="puesto" placeholder="Puesto"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" step="0.01" name="salario" placeholder="Salario"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" name="sucursal_id" placeholder="Sucursal ID"
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
@if(isset($empleados) && $empleados->count())

<table class="w-full border border-slate-600 text-white mt-10">

@foreach($empleados as $empleado)

<tr>
    <td>{{ $empleado->id }}</td>
    <td>{{ $empleado->nombre }}</td>
    <td>{{ $empleado->apellido }}</td>
    <td>{{ $empleado->puesto }}</td>
    <td>{{ $empleado->salario }}</td>
    <td>{{ $empleado->estado }}</td>
</tr>

@endforeach

</table>

@endif
</div>

@endsection