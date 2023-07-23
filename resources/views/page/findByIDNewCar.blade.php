@extends('layouts.layout')

@section('title', 'Find By ID')

@section('content')
    <div class="container">
        <div class="card bg-light mb-3">
            <div class="row no-gutters">
                <div class="col-md-6 col-sm-12">
                    <img style="height: 300px; width: 300px; margin-left: auto; margin-right: auto; display: block;"
                        src="{{ $autos->imagen }}" class="card-img-top" alt="...">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card-body">
                        <h1 class="display-4 mt-5">{{ $autos->marca }}</h1>
                        <p class="lead mt-1"><i class="fas fa-car"></i> Modelo: {{ $autos->modelo }}</p>
                        <p class="lead mt-1"><i class="fas fa-dollar-sign"></i> Precio: {{ $autos->precio }}</p>
                        <p class="lead mt-1"><i class="fas fa-palette"></i> Color: {{ $autos->color }}</p>
                        <p class="lead mt-1"><i class="fas fa-id-card"></i> Placa: {{ $autos->placa }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
