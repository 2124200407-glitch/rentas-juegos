<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRent</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white min-h-screen">

    <!-- HEADER -->
    <header class="bg-slate-800 shadow-lg">

        <nav class="w-full overflow-x-auto">

           <ul class="flex flex-wrap justify-center gap-4 text-sm md:text-lg font-medium p-4">

    <li>
        <a href="/" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Inicio
        </a>
    </li>

    <li>
        <a href="/clientes" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Clientes
        </a>
    </li>

    <li>
        <a href="/consolas" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Consolas
        </a>
    </li>

    <li>
        <a href="/videojuegos" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Videojuegos
        </a>
    </li>

    <li>
        <a href="/rentas" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Rentas
        </a>
    </li>

    <li>
        <a href="/sucursales" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Sucursales
        </a>
    </li>

    <li>
        <a href="/empleados" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Empleados
        </a>
    </li>

    <li>
        <a href="/categorias" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Categorías
        </a>
    </li>

    <li>
        <a href="/proveedores" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Proveedores
        </a>
    </li>

    <li>
        <a href="/detalles-rentas" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Detalles
        </a>
    </li>

    <li>
        <a href="/pagos" class="px-3 py-2 rounded-lg hover:bg-slate-700 hover:text-cyan-400 transition">
            Pagos
        </a>
    </li>

</ul>
        </nav>

    </header>

    <!-- CONTENIDO -->
    <main class="p-10">
        @yield('dinamico')
    </main>

</body>

</html>