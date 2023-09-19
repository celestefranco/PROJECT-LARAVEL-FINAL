@extends('dashboard')

@section('content')
<div class="container">
    <h1>Register New Roomtypes</h1>
    <form method="POST" action="{{ route('roomtypes.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>        
        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="{{ route('roomtypes.index') }}" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection
