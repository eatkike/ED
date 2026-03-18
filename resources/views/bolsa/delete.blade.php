<!DOCTYPE html>
<html>
<head>
    <title>Bolsas de ahorro</title>
</head>
<body>

<h1>Lista de bolsas</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Meta</th>
            <th>Fecha Meta</th>
            <th>Descripción</th>
            <th>Monto Actual</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bolsas as $bolsa)
        <tr>
            <td>{{ $bolsa->id }}</td>
            <td>{{ $bolsa->Nombre }}</td>
            <td>{{ $bolsa->Meta }}</td>
            <td>{{ $bolsa->{'Fecha de Meta'} }}</td>
            <td>{{ $bolsa->Descripcion }}</td>
            <td>{{ $bolsa->{'Monto Actual'} }}</td>

            <td>
                <form action="{{ route('bolsas.destroy', $bolsa->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Eliminar bolsa?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>