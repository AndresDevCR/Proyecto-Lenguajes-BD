@extends('layouts.layout')

@section('title', 'Autos Nuevos')

@section('content')
    <div class="text-center display 1 color primary">

        <h1 class="text-center display-5">
            Autos Nuevos
        </h1>
    </div>
    {{-- cards de autos --}}
    <div class="container">
        <div class="row">

            {{-- foreach model auto --}}
            @foreach ($autos as $item)
                <div class="col-4">
                    <div class="card mt-5" style="width: 18rem;">
                        <img src="{{ $item->imagen }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title
                            ">{{ $item->marca }}</h5>
                            <p class="card-text">{{ $item->modelo }}</p>
                            <p class="card-text">{{ $item->precio }}</p>
                            <a href="{{ route('findByID', $item->id) }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                  <!-- pagination -->
                  @endforeach
                  <div class="text-center mt-5">
                      {{ $autos->links() }}
                  </div>
        </div>
    </div>

@endsection
