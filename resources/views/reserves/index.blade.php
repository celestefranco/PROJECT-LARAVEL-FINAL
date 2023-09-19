@extends('dashboard')

@section('content')
<div class="container">
    <h1>Reservations List</h1>
    <a href="{{ route('reserves.create') }}" class="btn btn-primary mb-3">Register New Reservation</a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Room</th>
                <th>Star Date</th>
                <th>End Date</th>
                <th>Status Reservation</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->clients->name }}</td>
                <td>{{ $reservation->room->name }}</td>
                <td>{{ $reservation->star_date }}</td>
                <td>{{ $reservation->end_date}}</td>
                <td>{{ $reservation->status_reserve }}</td>
                <td>{{ $reservation->id_status }}</td>
                <td>
                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
