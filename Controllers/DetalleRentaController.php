<?php

namespace App\Http\Controllers;

use App\Models\DetalleRenta;
use Illuminate\Http\Request;

class DetalleRentaController extends Controller
{
    public function formulario()
{
    $detalles = DetalleRenta::all();

    return view('FDetallesRentas.inicio', compact('detalles'));
}
    public function guardar(Request $request)
    {
        // dd($request->all());

        $detalle = new DetalleRenta();

        $detalle->renta_id = $request->renta_id;
        $detalle->videojuego_id = $request->videojuego_id;
        $detalle->cantidad = $request->cantidad;
        $detalle->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $detalle->imagen = $nombreImagen;
        }

        $detalle->save();

        return redirect()->back();
    }
}