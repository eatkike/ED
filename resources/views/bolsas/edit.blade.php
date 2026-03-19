@extends('layouts.app')

@section('content')

    <h1>Editar Bolsa de Ahorro: {{ $bolsa->Nombre }}</h1>

    <form action="{{ route('bolsas.update', $bolsa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $bolsa->Nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="Meta" class="form-label">Meta</label>
            <input type="number" class="form-control" id="Meta" name="Meta" value="{{ $bolsa->Meta }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_meta" class="form-label">Fecha de Meta</label>
            <input type="date" class="form-control" id="fecha_meta" name="fecha_meta" value="{{ $bolsa->fecha_meta }}" required>
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ $bolsa->Descripcion }}" required>
        </div>

        <div class="mb-3">
            <label for="monto" class="form-label">Monto Actual</label>
            <input type="number" step="0.01" class="form-control" id="monto" name="monto" value="{{ $bolsa->monto }}" required>
        </div>  

        <button type="submit" class="btn btn-primary">
            <i class="fa-regular fa-floppy-disk"></i> Actualizar
        </button>
      
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>

    </form>

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('bolsas.index') }}" class="btn btn-danger">Regresar</a>
    </div>

@endsection