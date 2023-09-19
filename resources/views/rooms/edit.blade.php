@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Room</h1>
    <form method="POST" action="{{ route('rooms.update', $room->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $room->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $room->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price Day:</label>
            <input type="number" name="price_day" id="price_day" class="form-control" value="{{ old('price_day', $room->price_day) }}" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price Night:</label>
            <input type="number" name="price_night" id="price_night" class="form-control" value="{{ old('price_night', $room->price_night) }}" required>
        </div>      

       <div class="form-group">
           <label for="">status room</label>
           <input type="text" name="status_room" id="status_room"class="form-control" value="{{ old('status_room', $room->status_room) }}" required>            
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
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-primary">Volver a la lista</a>
    </form>
</div>
@endsection
