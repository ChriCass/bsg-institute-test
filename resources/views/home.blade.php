@extends('layouts.top')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12"  data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
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
            <div  class="white-box rounded analytics-info d-flex  " >
                <div><i class="bi h2 bi-file-earmark-text"></i></div>
                <div class="mx-3"  ><p class="h4 fw-bold m-0">Documentos por firmar</p>
                    <p class="fw-light">22 depndientes por firmar</p>
                </div>
            </div>
        @livewire('personal-counter')
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
            <div class="white-box">
                <span class="h5 fw-bold ">
                    Canales de Ayuda
                </span>
                <img class="img-fluid mt-3" src="{{asset('img/help.png')}}" alt="" srcset="">
            </div>
            <div class="white-box">
                <span class="h5 fw-bold ">¿Necesitas algún documento o constancia? Te apoyamos con tus trámites de manera rápida y sencilla</span>
                <img class="img-fluid mt-3" src="{{asset('img/team.png')}}" alt="" srcset="">
            </div>
            <div class="white-box">
                <span class="h3 fw-bold ">contratos por vencer</span>
            </div>
        </div>
      
    </div>
    
   
@endsection
