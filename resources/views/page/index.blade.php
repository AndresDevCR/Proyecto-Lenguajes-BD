@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')

    <div class="text-center">
        <!-- add botom -->
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
                            <a href="{{ route('delete', $contact->id) }}" class="btn btn-danger"> Delete </a>
                            <a href="{{ route('edit', $contact->id) }}" class="btn btn-success"> Update </a>
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
