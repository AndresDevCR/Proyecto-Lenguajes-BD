@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')

<div class="mt-5">
    <div class="text-center">
        <h1>Contact Us</h1>
    </div>
    <!-- form gorup boostrap -->
    <div class="container">
        <form action="{{ route('send') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" name="name" class="form-control" id="name"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" name="email" class="form-control" id="email"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea required name="message" class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection