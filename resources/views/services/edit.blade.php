@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Services</h1>

    <form method="POST" action="{{ route('services.update', $service->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $service->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $service->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $service->price) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
