<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcels = Parcel::paginate(10);// this fetch 10 per page
        return view('parcel.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parcel.register'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'recipient_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'weight' => 'required|numeric',
            'value' => 'required|numeric',
            'amount_paid' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Parcel::create($request->all()); 

        return redirect()->route('parcel.index')->with('success', 'Parcel registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $parcel = Parcel::findOrFail($id);
        return view('parcel.show', compact('parcel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $parcel = Parcel::findOrFail($id);
        return view('parcel.edit', compact('parcel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'recipient_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'weight' => 'required|numeric',
            'value' => 'required|numeric',
            'amount_paid' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $parcel = Parcel::findOrFail($id);
        $parcel->update($request->all()); // Update parcel data

        return redirect()->route('parcel.index')->with('success', 'Parcel updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $parcel = Parcel::findOrFail($id);
        $parcel->delete();

        return redirect()->route('parcel.index')->with('success', 'Parcel deleted successfully!');
    }

    public function editStatus($id)
    {
        $parcel = Parcel::findOrFail($id); // Find the parcel by ID or fail

        // Return the view with the parcel data
        return view('parcel.edit-status', compact('parcel'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        // Find the parcel and update its status
        $parcel = Parcel::findOrFail($id);
        $parcel->status = $request->status;
        $parcel->save();

        // Redirect with success message
        return redirect()->route('parcel.status')->with('success', 'Parcel status updated successfully');
    }

    public function status()
    {
        $parcels = Parcel::paginate(10);// this fetch 10 per page
        return view('parcel.status', compact('parcels')); 
    }
}
