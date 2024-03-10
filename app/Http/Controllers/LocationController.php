<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        
        return view('location.index',[
            'locations' => $locations,
            'resource' => 'lieux',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|max:60',
            'designation' => 'required|max:60',
            'address' => 'required|max:255',
            'locality_id' => 'required|max:20',
            'website' => 'nullable|max:255',
            'phone' => 'nullable|max:30',
        ]);

        $location = new Location();

        $location->slug = $validated['slug'];
        $location->designation = $validated['designation'];
        $location->address = $validated['address'];
        $location->locality_id = $validated['locality_id'];
        $location->website = $validated['website'];
        $location->phone = $validated['phone'];

        $location->save();

        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $location = Location::find($id);
        
        return view('location.show',[
            'location' => $location,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::find($id);
        
        return view('location.edit',[
            'location' => $location,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'slug' => 'required|max:60',
            'designation' => 'required|max:60',
            'address' => 'required|max:255',
            // 'locality_id' => 'required|max:20',
            'website' => 'nullable|max:255',
            'phone' => 'nullable|max:30',
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $location = Location::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $location->update($validated);

        return view('location.show',[
            'location' => $location,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Location::find($id);

        if($location) {
            $location->delete();
        }

        return redirect()->route('location.index');
    }
}
