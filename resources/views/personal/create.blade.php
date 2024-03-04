@extends('layouts.top')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12">
        <div class="white-box">
            <h3 class="box-title">Detalles del Personal</h3>
            <form action="{{ route('personal.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <!-- Alerta de Errores de Validación -->
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
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="estado">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="">Selecciona un Estado</option>
                                <option value="activo">Activo</option>
                                <option value="cesado">Cesado</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fecha de Nacimiento, Dirección -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
                        </div>
                    </div>
                </div>

                <!-- Botón de Envío -->
                <div class="row  mt-4">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn text-light btn-success">Agregar Personal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
