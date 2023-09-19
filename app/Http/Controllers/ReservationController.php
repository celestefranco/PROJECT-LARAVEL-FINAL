<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Room;
use App\Http\Controllers\DB;



class ReservationController extends Controller
{
    /**
     * Muestra una lista de reservaciones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reserves.index', compact('reservations'));
    }

    /**
     * Muestra el formulario para crear una nueva reservación.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('reserves.index', compact('clients'));
        
        $avaRoom = room::whereNotIn('id', function($query) {
            $query->select('id_room')->from('reserve');
        })->get();

        return view('reserves.create', compact('clients', 'avaRoom'));
    }
    /**
     * Almacena una reservación recién creada en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Validar los datos del formulario
        $request->validate([
            'id_client' => 'required|exists:clients,id',
            'id_room' => 'required|exists:rooms,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'star_date' => 'required|date',
            'end_date' => 'required|date|after:star_date',
            'status_reserve' => 'required|string|max:10',
            'id_status' => 'required|in:active,inactive',
        ]);

        // Crear una nueva instancia de Reservación
        $reservation = new Reservation([
            'id_client' => $request->input('id_client'),
            'id_room' => $request->input('id_room'),
            'name' => $request->input('name'),
            'description' => $request->input('description'), 
            'star_date' => $request->input('star_date'),
            'end_date' => $request->input('end_date'),
            'status_reserve' => 'required|string|max:10',
            'id_status' => $request->input('status'),
        ]);

  

        // Redirige a la lista de reservaciones con un mensaje de éxito
        return redirect()->route('reserves.index')->with('success', 'Reservación creada exitosamente');
    }

     public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reserves.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
         // Validar los datos del formulario
        $request->validate([
            'id_client' => 'required|exists:clients,id',
            'id_room' => 'required|exists:rooms,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'star_date' => 'required|date',
            'end_date' => 'required|date|after:star_date',
            'status_reserve' => 'required|string|max:10',
            'id_status' => 'required|in:active,inactive',
        ]);

        // Obtener la reservación existente
        $reservation = new Reservation([
            'id_client' => $request->input('id_client'),
            'id_room' => $request->input('id_room'),
            'name' => $request->input('name'),
            'description' => $request->input('description'), 
            'star_date' => $request->input('star_date'),
            'end_date' => $request->input('end_date'),
            'status_reserve' => 'required|string|max:10',
            'id_status' => $request->input('status'),
        ]);

        // Redirige a la lista de reservaciones con un mensaje de éxito
        return redirect()->route('reserves.index')->with('success', 'Reservación actualizada exitosamente');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reserves.show', compact('reservation'));
    }

   
}
