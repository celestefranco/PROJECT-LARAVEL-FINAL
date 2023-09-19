@extends('dashboard')

@section('content')

<div class="container">
    <h1>Services</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('services.create') }}" class="btn btn-primary">Register Services</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $items)
            <tr>
                <td>{{ $items->id }}</td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->description ?: 'N/A' }}</td>
                <td>{{ $items->price }}</td>
                <td>
                    @if($items->status = '1')
                        <span class="badge badge-success">Active</span>
                        @else
                           <span class="badge badge-danger">Inactive</span>
                        @endif
                </td>
                <td>
                    <a href="{{ route('services.show', $items->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('services.edit', $items->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection