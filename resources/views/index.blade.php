@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    ¡Bienvenido!
</h2>

<div class="grid gap-6 mb-8 md:grid-cols-1">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <p class="text-gray-600 dark:text-gray-400">
            En la barra lateral izquierda se encuentran los apartados para los diferentes servicios, 
            haga click en alguno para acceder a las contrataciones que hayan sido hechas o haga click en 
            'Audiovisuales Kanek' para volver a este menú.
            <br><br>
            - Una vez dentro de alguna de las secciones de servicios se apreciará el listado de las contrataciones.<br><br>
            - Haciendo click en el nombre de algún cliente podrá acceder a los detalles de dicha contratación.<br><br>
            - De igual manera, haciendo click en el ícono de 'eliminar' podrá eliminar el registro de alguna 
            contratación una vez esta haya sido cubierta o cancelada por el cliente.<br><br>
            - Asegúrese de cerrar sesión una vez haya terminado de usar el sitio.
        </p>
    </div>
</div>

@endsection