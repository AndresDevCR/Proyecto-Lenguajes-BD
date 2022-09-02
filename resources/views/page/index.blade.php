@extends('layouts.layout')
@section('title', 'Home Page')

@section('content')
    @foreach ($contacts as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">{{ $item->email }}</p>
                <p class="card-text">{{ $item->phone }}</p>
                <p class="card-text">{{ $item->message }}</p>
            </div>
    @endforeach
@endsection
