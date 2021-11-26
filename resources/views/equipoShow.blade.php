@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Detalles de la contratación
</h2>

<div class="grid gap-6 mb-8 md:grid-cols-1">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <p class="text-gray-600 dark:text-gray-400">
            <ul>
                <li>- Nombre de quien contrata: {{ $equipo->nombre }}</li><br>
                <li>- Teléfono de contacto: {{ $equipo->telefono }}</li><br>
                <li>- Correo electrónico: {{ $equipo->correo }}</li><br>
                <li>- Fecha de servicio: {{ $equipo->fecha }}</li><br>
                <li>- Equipo solicitado: {{ $equipo->equipo }}</li><br>
                <li>- Lugar del servicio: {{ $equipo->lugar }}</li><br>
                <li>- Mensaje: {{ $equipo->mensaje }}</li><br>
            </ul>
        </p>
    </div>
</div>

<table>
    <tr>
        <td>
            <div class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                href="{{ route('equipo.edit', $equipo) }}">
                    Editar registro
                </a>
            </div>
        </td>
        <td>
            <div class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    href="{{ route('equipo.index') }}">
                    Volver al listado
                </a>
            </div>
        </td>
    </tr>
</table>

@endsection