<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formulario()
    {
        $clientes = Cliente::all();

        return view('FClientes.inicio', compact('clientes'));
    }

    public function guardar(Request $request)
    {
        // dd($request->all());

        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $cliente->imagen = $nombreImagen;
        }

        $cliente->save();

        return redirect()->back();
    }
}