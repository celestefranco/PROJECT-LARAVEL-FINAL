@extends('dashboard')

@section('content')
<div class="container">
    <h1>Deactivate Client</h1>

    <p>Are you sure you want to deactivate the client{{ $client->name }}?</p>

    <form method="POST" action="{{ route('clients.deactivate', $client->id) }}">
        @csrf
        @method('PUT')

        <button type="submit" class="btn btn-warning">Deactivate</button>
        <a href="{{ route('clients.index') }}" class="btn btn-primary">Canceled</a>
    </form>
</div>
@endsection

