@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit RoomTypes</h1>
    <form method="POST" action="{{ route('roomtypes.update', $roomType->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $roomType->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ old ('description', $roomType->description) }}</textarea>
        </div>        
        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="{{ route('roomtypes.index') }}" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection
