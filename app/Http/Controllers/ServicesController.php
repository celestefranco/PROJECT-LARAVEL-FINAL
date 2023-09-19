<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function index()
    {
        $services = services::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'id_status' => 'required|string|max:10',
        ]);

        Services::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'id_status' => '1',
        ]);

        return redirect()->route('services.index')->with('success', 'Service registered successfully.');
    }

    public function show(Services $service)
    {
        return view('services.show', compact('service'));
    }

    public function edit(Services $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Services $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'id_status' => 'required|string|max:10',
        ]);

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'id_status' => '1',
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

}
