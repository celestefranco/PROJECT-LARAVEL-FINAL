<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomtypes = roomtype::all();
        return view('roomtypes.index', compact('roomtypes'));
    }

    public function create()
    {
        return view('roomtypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',            
        ]);

        RoomType::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),          
        ]);

        return redirect()->route('roomtypes.index')->with('success', 'Tipo de habitación creado exitosamente');
    }

    public function edit(RoomType $roomType)
    {
        return view('roomtypes.edit', compact('roomType'));
    }

    public function update(Request $request, RoomType $roomType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',           
        ]);

        $roomType->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),          
        ]);

        return redirect()->route('roomtypes.index')->with('success', 'Tipo de habitación actualizado exitosamente');
    }

    public function show(RoomType $roomType)
    {
        return view('roomtypes.show', compact('roomType'));
    }
}
