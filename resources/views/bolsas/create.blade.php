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

    <form action="{{ route('bolsa.store') }}" method="POST">
        @csrf
        <label for="usuario_id">Usuario:</label>
        <select name="usuario_id" id="usuario_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select><br><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" required><br><br>

        <button type="submit">Registrar</button>
    </form>
@endsection
</body>
</html>