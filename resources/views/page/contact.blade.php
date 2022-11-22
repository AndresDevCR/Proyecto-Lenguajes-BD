@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')



<div class="mt-5">

    <img class="p-5 mt-5 mb-5" style="margin-left:300px" src="https://www.grupoafiliamos.com/wp-content/uploads/2019/08/AFILIAMOS-Piezas-Web-2019-CONT%C3%81CTANOS-2.png" alt="">
    <!-- form gorup boostrap -->
    <div class="container">
        <form action="{{ route('send') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input required type="text" name="name" class="form-control" id="name"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" name="email" class="form-control" id="email"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea required name="message" class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
    </div>
@endsection