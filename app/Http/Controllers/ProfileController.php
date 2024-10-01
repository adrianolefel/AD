<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the profile view.
     */
    public function show()
    {
        return view('profile'); // Ensure this points to the correct profile view
    }

    /**
     * Update the profile.
     */
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            // Add other fields as necessary
        ]);

        // Update the authenticated user's profile
        //$user = auth()->user();
//$user->update($request->only('name', 'phone', 'address'));

        //return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}