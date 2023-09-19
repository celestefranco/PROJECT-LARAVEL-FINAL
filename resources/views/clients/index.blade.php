@extends('dashboard')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Welcome to the Room Reservation System</h1>
@stop

@section('content')
<div class="container">
    <h1>Clients List</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('clients.create') }}" class="btn btn-primary">Register Client</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td> 

                <td>
                    @if($item->status = '1')
                        <span class="badge badge-success">Active</span>
                        @else
                           <span class="badge badge-danger">Inactive</span>
                        @endif
                </td>
                <td>
                    <a href="{{ route('clients.show', $item->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('clients.edit', $item->id) }}" class="btn btn-warning">Edit</a>                    
                              
                    <!-- Formulario para desactivar el cliente -->
                    <form method="POST" action="{{ route('clients.deactivate', $item->id) }}" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-warning">Desactivar</button>
                    </form>
                                   <!-- Formulario para activar el cliente -->
                    <form method="POST" action="{{ route('clients.activate', $item->id) }}" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Activar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
