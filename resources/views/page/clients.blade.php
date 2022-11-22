@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')

    <div class="text-center">
        <!-- add botom -->
        <h1 class="text-center mb-5 text-primary display-3   " > Clientes</h1>
        <a href="{{ route('create') }}" class="btn btn-primary mt-3 mb-5">Add New Client</a>
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
    @endsection
