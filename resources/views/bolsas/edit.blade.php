<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR BOLSA DE AHORRO</title>
</head>
<body>

    @extends('layouts.app')
    @section('content')
    <h1>EDITAR BOLSA DE AHORRO DE: {{$bolsa->Nombre}}</h1>

    <form action="{{ route('bolsas.update', $bolsa)}}" method="POST">
    
    @csrf
    @method('PUT')

    <input requiere type="text" name="Nombre" value="{{ $bolsa->Nombre }}" class="form-control">
    <br>

    <input requiere type="number" name="Meta"  value="{{ $bolsa->Meta }}" class="form-control">
    <br>

    <input require type="date" name="fecha_meta" value="{{ $bolsa->fecha_meta }}" class="form-control">
    <br>

    <input requiere type="text" name="Descripcion" value="{{ $bolsa->Descripcion }}" class="form-control">
    <br>

    <input requiere type="number" name="monto" value="{{$bolsa->monto}}" class="form-control">
    <br>

    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>

    </form>
    @endsection


</body>
</html>