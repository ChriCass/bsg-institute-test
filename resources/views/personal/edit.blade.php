@extends('layouts.top')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12">
        <div class="white-box">
            <h3 class="box-title">Detalles del Personal</h3>
            <form action="{{ route('personal.update', $personal->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <!-- Nombre, Apellido, DNI, Estado -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $personal->nombre }}" placeholder="Nombre" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $personal->apellido }}" placeholder="Apellido" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni" value="{{ $personal->dni }}" placeholder="DNI" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="estado">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="">Selecciona un Estado</option>
                                <option value="activo" {{ $personal->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                                <option value="cesado" {{ $personal->estado == 'cesado' ? 'selected' : '' }}>Cesado</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fecha de Nacimiento, Dirección, Foto (si es necesario) -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $personal->fecha_nacimiento }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $personal->direccion }}" placeholder="Dirección" required>
                        </div>
                        {{-- Si tu entidad Personal tiene foto --}}
                        <div class="form-group mb-3">
                            <label for="photo">Foto</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            @if ($personal->photo)
                                <div class="mt-4">
                                    <img src="{{ asset('storage/' . $personal->photo) }}" alt="Foto Actual" style="max-width: 100px;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Actualizar Personal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
