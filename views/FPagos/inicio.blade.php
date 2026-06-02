@extends('layouts.app')
@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Pagos
    </h2>

    <form method="POST"
      action="{{ route('pagos.guardar') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="number" name="renta_id" placeholder="Renta ID">

    <input type="number" step="0.01" name="monto" placeholder="Monto">

    <input type="text" name="metodo_pago" placeholder="Método de Pago">

    <input type="file" name="imagen">

    <select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <button type="submit">
        Guardar
    </button>

</form>
@if(isset($pagos) && $pagos->count())

<table class="w-full border border-slate-600 text-white mt-10">

@foreach($pagos as $pago)

<tr>
    <td>{{ $pago->id }}</td>
    <td>{{ $pago->renta_id }}</td>
    <td>{{ $pago->monto }}</td>
    <td>{{ $pago->metodo_pago }}</td>
    <td>{{ $pago->estado }}</td>
</tr>

@endforeach

</table>

@endif
</div>

@endsection