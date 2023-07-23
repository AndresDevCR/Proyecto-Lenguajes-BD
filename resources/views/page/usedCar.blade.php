@extends('layouts.layout')

@section('title', 'Autos Usados')

@section('content')
    <div class="text-center display-1 text-primary">
        <h1 class="text-center display-5">
            <i class="fas fa-car"></i> Autos Usados
        </h1>
    </div>
    {{-- cards de autos --}}
    <div class="container">
        <div class="row">
            {{-- foreach model auto --}}
            @foreach ($autos as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item->imagen }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->marca }}</h5>
                            <p class="card-text">{{ $item->modelo }}</p>
                            <p class="card-text">${{ $item->precio }}</p>
                            <a href="{{ route('findByID', ['id' => $item->id]) }}" class="btn btn-primary">
                                <i class="fas fa-search"></i> Ver más
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                {{ $autos->links() }}
            </div>
        </div>
    </div>
@endsection
