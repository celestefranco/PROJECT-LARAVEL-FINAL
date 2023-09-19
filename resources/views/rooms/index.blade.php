@extends('dashboard')

@section('content')
<div class="container">
    <h1>Room List</h1>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary">Register Room</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Name</th>
                <th>Room Description</th>
                <th>Price Day</th>
                <th>Price Night</th>
                <th>Status Room</th>
                <th>RoomType</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->description ?: 'N/A' }}</td>
                <td>{{ $room->price_day }}</td>
                <td>{{ $room->price_night }}</td>
                <td>{{ $room->status_room }}</td>
                <td>{{ $room->roomType->name }}</td>                             
                <td>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
