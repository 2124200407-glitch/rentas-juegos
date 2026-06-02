@extends('plantilla.base')
@extends('layouts.app')
@section('dinamico')

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">
        Formulario Clientes
    </h2>

   <form method="POST"
      action="{{ route('clientes.guardar') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="text"
           name="nombre"
           placeholder="Nombre">

    <input type="text"
           name="apellido"
           placeholder="Apellido">

    <input type="tel"
           name="telefono"
           placeholder="Teléfono">

    <input type="email"
           name="correo"
           placeholder="Correo">

    <input type="file"
           name="imagen">

    <select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <button type="submit">
        Guardar
    </button>

    
</form>

@endsection

