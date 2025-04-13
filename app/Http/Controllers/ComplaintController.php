<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function create() {
        return view('complaints.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Complaint::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/dashboard')->with('success', 'Complaint submitted!');
    }

}
