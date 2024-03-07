@extends('layouts.top')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box rounded analytics-info d-flex justify-content-center flex-column align-items-center">
                @if(auth()->check())
                    @php
                        $nameParts = explode(' ', auth()->user()->name); // Divide el nombre en partes
                        $initials = ''; // Inicializa las iniciales como un string vacío
                        if (count($nameParts) > 1) {
                            // Si hay al menos dos partes, toma la primera letra de cada una de las dos primeras partes
                            $initials = strtoupper(substr($nameParts[0], 0, 1)) . strtoupper(substr($nameParts[1], 0, 1));
                        } else {
                            // Si solo hay una parte (solo nombre o apellido), toma la primera letra
                            $initials = strtoupper(substr($nameParts[0], 0, 1));
                        }
                    @endphp
                    <div class="circle">{{ $initials }}</div>
                    <h3 class="box-title mt-3 text-uppercase">{{ auth()->user()->name }}</h3>
                    <h5>{{ auth()->user()->email }}</h5>
                @else
                    <div class="circle">??</div>
                    <h3 class="box-title">Buenas noches, invitado</h3>
                @endif
            </div>
            
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="white-box analytics-info">
                @if (auth()->check())
                <h3 class="box-title">Buenas noches, <strong class="text-uppercase">{{ auth()->user()->name }}</strong> </h3>
            @else
                <h3 class="box-title">Buenas noches, invitado</h3>
            @endif

                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter fw-bold text__admin">bienvenido al portal de administracion </span></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container ">
        @if (session('status'))
            <div class="container mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
     
            </div>
        </div>
    </div>
@endsection
