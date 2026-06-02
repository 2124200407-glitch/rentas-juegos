<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Consola;
use App\Models\Videojuego;
use App\Models\Renta;
use App\Models\DetalleRenta;
use App\Models\Empleado;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Pago;

class AdministradorController extends Controller
{
    public function listadoClientes()
    {
        $clientes = Cliente::all();

        return view('FClientes.inicio', compact('clientes'));
    }

    public function listadoConsolas()
    {
        $consolas = Consola::all();

        return view('FConsolas.inicio', compact('consolas'));
    }

    public function listadoVideojuegos()
    {
        $videojuegos = Videojuego::all();

        return view('FVideojuegos.inicio', compact('videojuegos'));
    }

    public function listadoRentas()
    {
        $rentas = Renta::all();

        return view('FRentas.inicio', compact('rentas'));
    }

    public function listadoDetallesRentas()
    {
        $detalles = DetalleRenta::all();

        return view('FDetallesRentas.inicio', compact('detalles'));
    }

    public function listadoEmpleados()
    {
        $empleados = Empleado::all();

        return view('FEmpleados.inicio', compact('empleados'));
    }

    public function listadoSucursales()
    {
        $sucursales = Sucursal::all();

        return view('FSucursales.inicio', compact('sucursales'));
    }

    public function listadoCategorias()
    {
        $categorias = Categoria::all();

        return view('FCategorias.inicio', compact('categorias'));
    }

    public function listadoProveedores()
    {
        $proveedores = Proveedor::all();

        return view('FProveedores.inicio', compact('proveedores'));
    }

    public function listadoPagos()
    {
        $pagos = Pago::all();

        return view('FPagos.inicio', compact('pagos'));
    }
}