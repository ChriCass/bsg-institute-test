@extends('layouts.top')



@section('content')
    {{-- Display success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Create a New Personal?</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li class="ms-auto">
                        <a name="" id="" class="btn btn-success text-light" href="{{ url('/personal/create') }}" role="button">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Personal List</h3>
                    <!-- Puedes quitar el filtro de fechas si no lo necesitas -->
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Nombre</th>
                                <th class="border-top-0">Apellido</th>
                                <th class="border-top-0">DNI</th>
                                <th class="border-top-0">Estado</th>
                                <th class="border-top-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personal as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nombre }}</td>
                                <td>{{ $p->apellido }}</td>
                                <td>{{ $p->dni }}</td>
                                <td class="{{ $p->estado == 'activo' ? 'text-success fw-bold' : 'text-warning fw-bold' }}">
                                    {{ $p->estado }}
                                </td>
                                <td class="d-flex">
                                    <!-- Botón de editar -->
                                    <a href="{{ url('/personal/' . $p->id . '/edit') }}" class="btn btn-warning text-light">
                                        Edit
                                    </a>
                                    <!-- Botón de borrar -->
                                    <form action="{{ url('/personal/' . $p->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-light mx-3">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
