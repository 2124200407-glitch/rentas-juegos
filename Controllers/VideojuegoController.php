<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function formulario()
    {
        $videojuegos = Videojuego::all();

        return view('FVideojuegos.inicio', compact('videojuegos'));
    }

    public function guardar(Request $request)
    {
        $videojuego = new Videojuego();

        $videojuego->titulo = $request->titulo;
        $videojuego->genero = $request->genero;
        $videojuego->precio_renta = $request->precio_renta;
        $videojuego->clasificacion = $request->clasificacion;
        $videojuego->stock = $request->stock;
        $videojuego->consola_id = $request->consola_id;
        $videojuego->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $videojuego->imagen = $nombreImagen;
        }

        $videojuego->save();

        return redirect()->back();
    }
}