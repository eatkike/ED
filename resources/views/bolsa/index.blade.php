<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de bolsas</title>
</head>
<body>
    <h1>VER BOLSAS</h1>
    <br>

    <div class="d-flex  justify-content-end mb-2">
        <a href="{{ route('libros.create') }}">
            <button class="btn btn-success me-3 mb-3">
                <i class="fa-solid fa-plus"></i>Nuevo libro
            </button>
        </a>
        <form action="{{ route('cerrar') }}" method="post">
            @csrf
            <button class="btn btn-danger me-3 mb-3">
                <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
            </button>
        </form>

    </div>

    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>META</th>
            <th>FECHA DE META</th>
            <th>DESCRIPCION</th>
            <th>MONTO ACTUAL</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            <!-- Ciclo para recorrer los datos del modelo -->
            @foreach ($bolsas as $bolsa)
            <tr>
                <!-- nombre de la BD -->
                <td> {{$bolsa->id }} </td>
                <td> {{$bolsa->nombre }} </td>
                <td> {{$bolsa->meta }} </td>
                <td> {{$bolsa->'fecha de meta'}} </td>
                <td> {{$bolsa->descripcion }} </td>
                <td> {{$bolsa->'monto actual' }} </td>
                <td>
                    <a href="{{ route('bolsas.edit', $bolsa) }}">
                        <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                    <form action="{{ route('bolsas.destroy', $bolsa) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button 
                        class="btn btn-danger"
                        onclick="return confirm('¿Eliminar el registro?')">
                        <i class="fa-solid fa-trash"></i></button>

                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>
</body>
</html>