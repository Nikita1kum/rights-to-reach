<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function index()  //was not
    {
        $complaints = Complaint::all();
        return view('complaints.index', compact('complaints'));
    }

    public function create()
    {
        return view('complaints.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Complaint::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'status' => 'Pending',  //was not
        ]);

        return redirect()->route('dashboard')->with('success', 'Complaint filed successfully!');
    }

    public function show($id) //was not
    {
        $complaint = Complaint::findOrFail($id);
        return view('complaints.show', compact('complaint'));
    }

    public function resolve(Request $request, $id) //wa not
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->update(['status' => 'Resolved']);

        return redirect()->route('dashboard')->with('success', 'Complaint resolved!');
    }

    public function destroy($id)  //was not
    {
        Complaint::destroy($id);

        return redirect()->route('complaints.index')->with('success', 'Complaint deleted!');
    }
}
