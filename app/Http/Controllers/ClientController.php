<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = client::where('id_status', '1')->get();
        return view('clients.index', compact('clients'));
        
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:client',
            'phone' => 'required|string|max:20',
            'id_status' => 'required|string|max:10',
        ]);

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_status' => '1', // Por defecto, el cliente se registra como activo
        ]);

        return redirect()->route('clients.index')->with('success', 'Client successfully registered.');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:client,email,' . $client->id,
            'phone' => 'required|string|max:20',
        ]);

        $client->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client successfully updated.');
    }

    public function deactivate(Request $request, $id)
    {
        $client = Client::findOrFail($id);
    
        $client->id_status = '2';
        $client->save();
    
        return redirect()->route('clients.index')->with('success', 'Client deactivate successfully.');
    }

    public function activate(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->id_status = '1';
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client activate successfully.');
    }
}
