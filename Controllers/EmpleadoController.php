<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function formulario()
{
    $empleados = Empleado::all();

    return view('FEmpleados.inicio', compact('empleados'));
}
    public function guardar(Request $request)
    {
        // dd($request->all());

        $empleado = new Empleado();

        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->puesto = $request->puesto;
        $empleado->salario = $request->salario;
        $empleado->sucursal_id = $request->sucursal_id;

        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time().'_'.$archivo->getClientOriginalName();

            $archivo->move(public_path('imagenes'), $nombreImagen);

            $empleado->imagen = $nombreImagen;
        }

        $empleado->estado = $request->estado;

        $empleado->save();

        return redirect()->back();
    }
}