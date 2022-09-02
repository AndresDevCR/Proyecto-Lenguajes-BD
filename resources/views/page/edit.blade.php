@extends('layouts.layout')

@section('title', 'Create')


@section('content')
    <section>
        <form action="{{route('contact.update')}}" method="post">
            <!--hidden id -->
            <input type="hidden" name="id" value="{{$contact->id}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$contact->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$contact->email}}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{$contact->phone}}">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea  required class="form-control" id="message" name="message" rows="3">{{$contact->message}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </section>
@endsection