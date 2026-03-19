<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
    <h1>REGISTRAR BOLSA DE AHORRO</h1>

    <form action="{{ route('bolsas.store') }}" method="POST">
        @csrf
        <label>Usuario:</label>
        <input type="text" value="{{ Auth::user()->name }}" disabled>
            
        </select><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="meta">Meta:</label>
        <input type="number" name="meta" id="meta" required><br><br>
        <label for="fecha_meta">Fecha de Meta:</label>
        <input type="date" name="fecha_meta" id="fecha_meta" required><br><br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>
    
        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" required><br><br>

        <button type="submit">Registrar</button>
    </form>
@endsection
</body>
</html>