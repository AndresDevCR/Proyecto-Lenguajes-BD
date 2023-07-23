@extends('layouts.layout')

@section('title', 'Alquiler de Autos')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <h1 class="text-primary display-4">Alquiler de Autos</h1>
                    <p class="lead">Encuentra el auto perfecto para tus viajes</p>
                </div>
                <div class="card-deck mt-5">
                    <!-- Primer auto -->
                    <div class="card">
                        <img src="ruta_de_la_imagen" class="card-img-top" alt="Auto 1">
                        <div class="card-body">
                            <h5 class="card-title">Modelo 1</h5>
                            <p class="card-text">Descripción del auto 1.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Alquilar</a>
                        </div>
                    </div>
                    <!-- Segundo auto -->
                    <div class="card">
                        <img src="ruta_de_la_imagen" class="card-img-top" alt="Auto 2">
                        <div class="card-body">
                            <h5 class="card-title">Modelo 2</h5>
                            <p class="card-text">Descripción del auto 2.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Alquilar</a>
                        </div>
                    </div>
                    <!-- Tercer auto -->
                    <div class="card">
                        <img src="ruta_de_la_imagen" class="card-img-top" alt="Auto 3">
                        <div class="card-body">
                            <h5 class="card-title">Modelo 3</h5>
                            <p class="card-text">Descripción del auto 3.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Alquilar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
