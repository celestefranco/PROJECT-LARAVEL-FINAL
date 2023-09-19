@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Activar Cliente</h1>

    <p>¿Estás seguro de que deseas activar al cliente {{ $client->name }}?</p>

    <form method="POST" action="{{ route('clients.activate', $client->id) }}">
        @csrf
        @method('PUT')

        <button type="submit" class="btn btn-success">Activar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-primary">Cancelar</a>
    </form>
</div>
@endsection
