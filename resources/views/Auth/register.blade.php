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

    <h1>REGISTRO DE USUARIO</h1>

    <form action="{{ route('registro.store') }}" method="POST">
        @csrf
        
        <input type="text" name="name" placeholder="Nombre" class="form-control" required>
        <br>
        <input type="text" name="email" placeholder="Correo" class="form-control" required>
        <br>
        <input type="text" name="phone" placeholder="Teléfono" class="form-control" required>
        <br>
        <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
        <br>
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="form-control" required>
        <br>

        <div class="form-check">
            <input type="checkbox" name="is_admin" value="1" {{ old('is_admin') ? 'checked' : '' }}>
            <label>Es administrador</label>
        </div>
        <br>

        <div class="d-flex  justify-content-end mb-2">
            <button type="submit" class="btn btn-primary me-3 mb-3"><i class="fa-solid fa-floppy-disk"></i> Guardar </button>

            <a href="{{ route('acceso') }}" class="btn btn-secondary me-3 mb-3">
                <i class="fa-solid fa-sign-in-alt"></i> Iniciar Sesión
            </a>
        </div>
        
    
    </form>

    @endsection
</body>
</html>