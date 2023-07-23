@extends('layouts.layout')

@section('title', 'Create')

@section('content')
    <section>
        <form action="{{ route('contact.add') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Name</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="message"><i class="fas fa-comment"></i> Message</label>
                <textarea required class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Submit</button>
        </form>
    </section>
@endsection
