@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="text-center">
                <h1 class="text-primary display-3 mb-5">Clientes</h1>
                <a href="{{ route('create') }}" class="btn btn-primary mt-3 mb-5">
                    <i class="fas fa-user-plus"></i> Agregar Nuevo Cliente
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <!-- encabezado de la tabla ... -->

                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <a href="{{ route('findByID', $contact->id) }}" class="btn btn-primary">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('edit', $contact->id) }}" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i> Actualizar
                                        </a>
                                        <a href="{{ route('delete', $contact->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
