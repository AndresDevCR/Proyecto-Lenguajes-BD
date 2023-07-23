@extends('layouts.layout')

@section('title', 'Autos Nuevos')

@section('content')
    <div class="text-center display-1 text-primary">
        <h1 class="text-center display-5">
            <i class="fas fa-car"></i> Autos Nuevos
        </h1>
    </div>
    {{-- cards de autos --}}
    <div class="container">
        <div class="row">
            {{-- foreach model auto --}}
            @foreach ($autos as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card mt-5">
                        <img src="{{ $item->imagen }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->marca }}</h5>
                            <p class="card-text">{{ $item->modelo }}</p>
                            <p class="card-text">${{ $item->precio }}</p>
                            <a href="{{ route('findByID', $item->id) }}" class="btn btn-primary">
                                <i class="fas fa-search"></i> Ver más
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- pagination -->
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-center">
                    {{ $autos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
