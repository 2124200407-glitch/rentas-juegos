<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    public function formulario()
{
    $rentas = Renta::all();

    return view('FRentas.inicio', compact('rentas'));
}
    public function guardar(Request $request)
    {
        // dd($request->all());

        $renta = new Renta();

        $renta->cliente_id = $request->cliente_id;
        $renta->videojuego_id = $request->videojuego_id;
        $renta->fecha_renta = $request->fecha_renta;
        $renta->fecha_devolucion = $request->fecha_devolucion;
        $renta->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $renta->imagen = $nombreImagen;
        }

        $renta->save();

        return redirect()->back();
    }
}