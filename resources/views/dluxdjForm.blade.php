@extends('layouts.windmill')
@section('contenido')
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Editar datos de contratación
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <form action="{{ route('djcotizacion.update', $djcotizacion) }}" method="POST">
            @method('PATCH')
            @csrf
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre de quien contrata:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="nombre" value="{{ old('nombre') ?? $djcotizacion->nombre ?? '' }}"
                />
                @error('nombre')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Teléfono de contacto:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="telefono" value="{{ old('telefono') ?? $djcotizacion->telefono ?? '' }}"
                />
                @error('telefono')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Correo electrónico:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="email" name="correo" value="{{ old('correo') ?? $djcotizacion->correo ?? '' }}"
                />
                @error('correo')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Fecha de servicio:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="fecha" value="{{ old('fecha') ?? $djcotizacion->fecha ?? '' }}"
                />
                @error('fecha')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Paquete solicitado:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="paquete" value="{{ old('paquete') ?? $djcotizacion->paquete ?? '' }}"
                />
                @error('paquete')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Lugar del servicio:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="lugar" value="{{ old('lugar') ?? $djcotizacion->lugar ?? '' }}"
                />
                @error('lugar')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mensaje:</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="mensaje" value="{{ old('mensaje') ?? $djcotizacion->mensaje ?? '' }}"
                />
                @error('mensaje')
                    <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </label>

            <div class="mt-4">
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
@endsection