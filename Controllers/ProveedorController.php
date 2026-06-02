<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function formulario()
    {
        $proveedores = Proveedor::all();

        return view('FProveedores.inicio', compact('proveedores'));
    }

    public function guardar(Request $request)
    {
        $proveedor = new Proveedor();

        $proveedor->nombre = $request->nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;
        $proveedor->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $proveedor->imagen = $nombreImagen;
        }

        $proveedor->save();

        return redirect()->back();
    }
}