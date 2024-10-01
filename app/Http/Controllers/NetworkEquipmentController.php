<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NetworkEquipment;

class NetworkEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networkEquipments = NetworkEquipment::orderBy('created_at', 'DESC')->get();
        return view('network-equipment.index', compact('networkEquipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('network-equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'ip_address' => 'required|string|max:255',
            'mac_address' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        NetworkEquipment::create($request->all());

        return redirect()->route('network-equipments.index')->with('success', 'Network Equipment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $networkEquipment = NetworkEquipment::findOrFail($id);
        return view('network-equipment.show', compact('networkEquipment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $networkEquipment = NetworkEquipment::findOrFail($id);
        return view('network-equipment.edit', compact('networkEquipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'ip_address' => 'required|string|max:255',
            'mac_address' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $networkEquipment = NetworkEquipment::findOrFail($id);
        $networkEquipment->update($request->all());

        return redirect()->route('network-equipments.index')->with('success', 'Network Equipment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $networkEquipment = NetworkEquipment::findOrFail($id);
        $networkEquipment->delete();

        return redirect()->route('network-equipments.index')->with('success', 'Network Equipment deleted successfully');
    }
}