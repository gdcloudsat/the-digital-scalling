<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function popupStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
        ]);

        Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => 'Popup Lead',
            'message' => 'Lead captured from popup.',
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        return response()->json(['message' => 'Thank you! We will contact you soon.']);
    }
}
