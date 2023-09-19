@extends('dashboard')

@section('content')
<div class="container">
    <h1>RoomTypes</h1>
    <a href="{{ route('roomtypes.create') }}" class="btn btn-primary">Register New Roomtypes</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roomtypes as $roomType)
            <tr>
                <td>{{ $roomType->id }}</td>
                <td>{{ $roomType->name }}</td>
                <td>{{ $roomType->description }}</td>               
                <td>
                    <a href="{{ route('roomtypes.show', $roomType->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('roomtypes.edit', $roomType->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
