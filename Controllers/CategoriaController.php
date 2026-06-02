<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function formulario()
    {
        $categorias = Categoria::all();

        return view('FCategorias.inicio', compact('categorias'));
    }

    public function guardar(Request $request)
    {
        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->estado = $request->estado;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $categoria->imagen = $nombreImagen;
        }

        $categoria->save();

        return redirect()->back();
    }
}