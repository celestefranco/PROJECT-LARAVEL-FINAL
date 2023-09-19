<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function index()
    {
        $rooms = room::all();
        return view('rooms.index', compact('rooms'));

        $roomTypes = RoomType::all(); // Obtén todos los tipos de habitaciones desde la tabla roomtype.

        return view('rooms.index', compact('roomTypes'));
    }

    public function create()
    {
        $roomTypes = RoomType::all(); // Obtén todos los tipos de habitaciones desde la tabla roomtype.

        return view('rooms.create', compact('roomTypes'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|nullable|string',
            'price_day' => 'required|numeric|min:0',
            'price_night' => 'required|numeric|min:0',
            'status_room' => 'required|string|max:10',
            'id_roomtype' => 'required|string|max:10',
            'id_status' => 'required|string|max:10',
        ]);
        
            Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'price_day' => $request->price_day,
            'price_night' => $request->price_night,
            'status_room' => $request->status_room,
            'id_roomtype' => $request->id_roomtype,
            'id_status' => '1',
        ]);
        

        return redirect()->route('rooms.index')->with('success', 'Client successfully registered.');

    }
    // retorno vista con los datos de la reservacion
    public function edit(Room $room)
    {
        $roomTypes = RoomType::all(); // Obtén todos los tipos de habitaciones desde la tabla roomtype.

        return view('rooms.edit', compact('room', 'roomTypes'));
    }

    // select * from room where id 
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|nullable|string',
            'price_day' => 'required|numeric|min:0',
            'price_night' => 'required|numeric|min:0',
            'status_room' => 'required|string|max:10',
            'id_roomtype' => 'required|string|max:10',
            'id_status' => 'required|string|max:10',
        ]);

        $room->update([
            'name' => $request->name,
            'description' => $request->description,
            'price_day' => $request->price_day,
            'price_night' => $request->price_night,
            'status_room' => $request->status_room,
            'id_roomtype' => $request->id_roomtype,
            'id_status' => '1',
        ]);

        return redirect()->route('rooms.index')->with('success', 'Habitación actualizada exitosamente');
    }
   
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }
}
