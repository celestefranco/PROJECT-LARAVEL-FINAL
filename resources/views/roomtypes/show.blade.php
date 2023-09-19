@extends('dashboard')

@section('content')
<div class="container">
    <h1>RoomTypes Detail</h1>
    <p><strong>ID:</strong> {{ $roomType->id }}</p>
    <p><strong>Name:</strong> {{ $roomType->name }}</p>
    <p><strong>Description:</strong> {{ $roomType->description }}</p>
    <a href="{{ route('roomtypes.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
