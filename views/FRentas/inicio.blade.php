@extends('/plantilla/base')
@section('dinamico')
@extends('layouts.app')



<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Formulario Rentas
    </h2>

    <form method="POST"
          action="{{ route('rentas.guardar') }}"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="number" name="cliente_id" placeholder="Cliente ID"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="number" name="videojuego_id" placeholder="Videojuego ID"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="datetime-local" name="fecha_renta"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="date" name="fecha_devolucion"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <input type="file" name="imagen"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

        <select name="estado"
            class="w-full p-3 rounded-lg bg-slate-700 text-white">

            <option value="Rentado">Rentado</option>
            <option value="Devuelto">Devuelto</option>
            <option value="Retrasado">Retrasado</option>

        </select>

        <button type="submit"
            class="w-full bg-cyan-500 py-3 rounded-lg font-bold">

            Guardar

        </button>

    </form>
@if(isset($rentas) && $rentas->count())

<table class="w-full border border-slate-600 text-white mt-10">

@foreach($rentas as $renta)

<tr>
    <td>{{ $renta->id }}</td>
    <td>{{ $renta->cliente_id }}</td>
    <td>{{ $renta->videojuego_id }}</td>
    <td>{{ $renta->fecha_renta }}</td>
    <td>{{ $renta->fecha_devolucion }}</td>
    <td>{{ $renta->estado }}</td>
</tr>

@endforeach

</table>

@endif
</div>

@endsection