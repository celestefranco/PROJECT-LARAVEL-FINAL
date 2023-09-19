@extends('dashboard')

@section('content')
<div class="container">
    <h1>Register New Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <div class="form-group">
             <label for="">Name</label>
            <input type="text" name="name" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="">description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="">price day</label>
            <input type="text" name="price_day" class="form-control">
        </div>
        <div class="form-group">
            <label for="">price night</label>
            <input type="text" name="price_night" class="form-control">
        </div>
        <div class="form-group">
            <label for="">status room</label>
            <input type="text" name="status_room" class="form-control">            
        </div> 
        <div class="form-group">
            <label for="id_roomtype">Roomtype</label>
            <select name="id_roomtype" id="id_roomtype" class="form-control" required>
                @foreach($roomTypes as $roomType)
                    <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="id_status" value="1" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Register Room</button>
    </form>

@endsection