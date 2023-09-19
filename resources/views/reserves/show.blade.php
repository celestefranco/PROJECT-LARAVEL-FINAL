@extends('dashboard')

@section('content')
<div class="container">
    <h1>Reservations Details</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $reservation->id }}</td>
        </tr>
        <tr>
            <th>Client:</th>
            <td>{{ $reservation->client->name }}</td>
        </tr>
        <tr>
            <th>Room:</th>
            <td>{{ $reservation->room->room_number }}</td>
        </tr>
        <tr>
            <th>Check_In:</th>
            <td>{{ $reservation->star_date }}</td>
        </tr>
        <tr>
            <th>Check_Out:</th>
            <td>{{ $reservation->end_date }}</td>
        </tr>
        <tr>
            <th>Status Reservations:</th>
            <td>{{ $reservation->status_reserve }}</td>
        </tr>
    </table>

    <a href="{{ route('reserves.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
