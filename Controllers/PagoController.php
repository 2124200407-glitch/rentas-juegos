<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function formulario()
{
    $pagos = Pago::all();

    return view('FPagos.inicio', compact('pagos'));
}
    public function guardar(Request $request)
    {
        // dd($request->all());

        $pago = new Pago();

        $pago->renta_id = $request->renta_id;
        $pago->monto = $request->monto;
        $pago->metodo_pago = $request->metodo_pago;
        $pago->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $pago->imagen = $nombreImagen;
        }

        $pago->save();

        return redirect()->back();
    }
}