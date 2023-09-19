@extends('dashboard')

@section('content')
<div class="container">
    <h1>Client Details</h1>

    <ul>
        <li><strong>Name:</strong> {{ $client->name }}</li>
        <li><strong>Email:</strong> {{ $client->email }}</li>
        <li><strong>Phone:</strong> {{ $client->phone }}</li>
        <li><strong>Status:</strong> {
            @if($client->status = '1')
                        <span class="badge badge-success">Active</span>
                        @else
                           <span class="badge badge-danger">Inactive</span>
            @endif}
        </li>
    </ul>

    <a href="{{ route('clients.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
