<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Computer;

 
class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computer = Computer::orderBy('created_at', 'DESC')->get();
  
        return view('computers.index', compact('computer'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Computer::create($request->all());
 
        return redirect()->route('computers')->with('success', 'Computer added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $computer = Computer::findOrFail($id);
  
        return view('computers.show', compact('computer'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $computer = Computer::findOrFail($id);
  
        return view('computers.edit', compact('computer'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $computer = Computer::findOrFail($id);
  
        $computer->update($request->all());
  
        return redirect()->route('computers')->with('success', 'computer updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $computer = Computer::findOrFail($id);
  
        $computer->delete();
  
        return redirect()->route('computers')->with('success', 'computer deleted successfully');
    }
}