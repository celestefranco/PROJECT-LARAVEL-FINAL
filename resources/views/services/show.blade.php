@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Services Details</h1>

        <ul>
            <li><strong>Name:</strong> {{ $service->name }}</li>
            <li><strong>Description:</strong> {{ $service->description }}</li>
            <li><strong>Price:</strong> {{ $service->price }}</li>
            <li><strong>Status:</strong> {
                @if($service->status = '1')
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                @endif}
            </li>
        </ul>
    
        <a href="{{ route('services.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
