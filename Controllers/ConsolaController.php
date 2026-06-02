<?php

namespace App\Http\Controllers;

use App\Models\Consola;
use Illuminate\Http\Request;

class ConsolaController extends Controller
{
    public function formulario()
    {
        $consolas = Consola::all();

        return view('FConsolas.inicio', compact('consolas'));
    }

    public function guardar(Request $request)
    {
        $consola = new Consola();

        $consola->nombre = $request->nombre;
        $consola->fabricante = $request->fabricante;
        $consola->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $consola->imagen = $nombreImagen;
        }

        $consola->save();

        return redirect()->back();
    }
}