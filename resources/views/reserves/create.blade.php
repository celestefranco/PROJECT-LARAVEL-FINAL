@extends('dashboard')

@section('content')
<div class="container">
    <h1>Register New Reservation</h1>

    <form method="POST" action="{{ route('reserves.store') }}">
        @csrf

        <div class="section">
            <div class="form-group">
                <label for="id_client">Select Client:</label>
                <select name="id_client" id="id_client" class="form-control" required>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>            
        </div>

        <!-- Agregar Nuevo Cliente -->
        <div class="section">
            <div class="form-group">
                <a href="{{ route('clients.create') }}" class="btn btn-primary">Register New Client</a>
            </div>
        </div>

        <div class="section">
            <h2>Available Rooms</h2>
            <div class="form-group">
                <label for="id_room">Select room</label>
                <select name="id_room" id="id_room" class="form-control" required>
                    <option value="">selected</option>
                    @foreach($avaRoom as $room)
                        <option value="{{ $room->id }}">{{ $room->name }} - {{ $room->roomType->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Fecha de Entrada -->
        <div class="form-group">
            <label for="star_date">Star Date:</label>
            <input type="date" name="star_date" id="star_date" class="form-control" required>
        </div>

        <!-- Fecha de Salida -->
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
        </div>

        <div class="section">
            <h2>Estado de Reserva</h2>
            <div class="form-group">
                <label for="reservation_status">Select reservation status:</label>
                <select name="reservation_status" id="reservation_status" class="form-control" required>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="reserved">Reserved</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>

        <!-- Estado -->
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="id_status" value="1" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Crear Reserva</button>
        <a href="{{ route('reserves.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
