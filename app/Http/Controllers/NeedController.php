<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;

class NeedController extends Controller
{
    // Display the form for creating a new need
    public function create()
    {
        return view('needs.create');
    }

    // Store a newly created need in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Create and store the new need
        Need::create([
            'title' => $request->title,
            'description' => $request->description,
            // Add more fields as needed
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Need submitted successfully!');
    }
}