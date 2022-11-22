@extends('layouts.layout')
@section('title', 'Find By ID')

@section('content')
    <div class="text-center">
        <img style="height: 300px; width: 300px; margin-left: 40%"  src="{{ $autos->imagen }}" class="card-img-top" alt="...">
        <h1 class="display-1 mt-5">{{ $autos->marca }}</h1>
        <p class="mt-1">Marca: {{ $autos->modelo }}</p>
        <p class="mt-1">Precio: {{ $autos->precio }}</p>
        <p class="mt-1">Color: {{ $autos->color }}</p>
        <p class="p-5">Placa:  {{ $autos->placa }}</p>
    </div>
@endsection
