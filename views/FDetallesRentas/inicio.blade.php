@section('dinamico')
@extends('layouts.app')
<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Detalles Rentas
    </h2>

   <form method="POST"
      action="{{ route('detallesrentas.guardar') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="number" name="renta_id" placeholder="Renta ID">

    <input type="number" name="videojuego_id" placeholder="Videojuego ID">

    <input type="number" name="cantidad" placeholder="Cantidad">

    <input type="file" name="imagen">

    <select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <button type="submit">
        Guardar
    </button>

</form>
@if(isset($detalles) && $detalles->count())

<table class="w-full border border-slate-600 text-white mt-10">

@foreach($detalles as $detalle)

<tr>
    <td>{{ $detalle->id }}</td>
    <td>{{ $detalle->renta_id }}</td>
    <td>{{ $detalle->videojuego_id }}</td>
    <td>{{ $detalle->cantidad }}</td>
    <td>{{ $detalle->estado }}</td>
</tr>

@endforeach

</table>

@endif
</div>

@endsection