<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function formulario()
{
    $sucursales = Sucursal::all();

    return view('FSucursales.inicio', compact('sucursales'));
}
    public function guardar(Request $request)
    {
        // dd($request->all());

        $sucursal = new Sucursal();

        $sucursal->nombre = $request->nombre;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->direccion = $request->direccion;
        $sucursal->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $sucursal->imagen = $nombreImagen;
        }

        $sucursal->save();

        return redirect()->back();
    }
}