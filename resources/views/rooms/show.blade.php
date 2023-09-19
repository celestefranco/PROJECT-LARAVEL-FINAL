@extends('dashboard')

@section('content')
<div class="container">
    <h1>Room Details</h1>
    <p><strong>ID:</strong> {{ $room->id }}</p>
    <li><strong>Name:</strong> {{ $room->name }}</li>
    <li><strong>Description:</strong> {{ $room->description }}</li>
    <li><strong>Price_Day:</strong> {{ $room->price }}</li>
    <li><strong>Price_Night:</strong> {{ $room->price }}</li>
    <li><strong>Status Room:</strong> {{ $room->status_room }}</li>
    <li><strong>RoomType:</strong> {{ $room->roomType->name  }}</li>
    <a href="{{ route('rooms.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
