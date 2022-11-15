@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')

    <div class="text-center">
        <!-- add botom -->
        <h1 class="text-center mb-5 text-primary display-3   " > Contactos Clientes</h1>
        <a href="{{ route('create') }}" class="btn btn-primary">Add New Contact</a>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Message </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td> {{ $contact->id }} </td>
                        <td> {{ $contact->name }} </td>
                        <td> {{ $contact->email }} </td>
                        <td> {{ $contact->phone }} </td>
                        <td> {{ $contact->message }} </td>
                        <td> <a href="{{ route('findByID', $contact->id) }}" class="btn btn-primary"> Watch </a>
                            <a href="{{ route('edit', $contact->id) }}" class="btn btn-success"> Update </a>
                            <a href="{{ route('delete', $contact->id) }}" class="btn btn-danger"> Delete </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- pagination -->
        <div class="text-center">
            {{ $contacts->links() }}
        </div>
    </div>
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
