@extends('layouts.layout')

@section('title', 'Find By ID')

@section('content')
    <div class="text-center">
        <p>{{$contact-> name}}</p>
        <p>{{$contact-> email}}</p>
        <p>{{$contact-> phone}}</p>
        <p>{{$contact-> message}}</p>

    </div>
@endsection