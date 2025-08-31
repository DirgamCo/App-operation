<?php

namespace App\Http\Controllers;

use App\City;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::with(['city'])->withCount(['businessLocations'])
        ->latest()->paginate(10);

        return view('locations.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::select('id','name')->get();
        return view('locations.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'description'           => 'nullable|string',
            'city_id'               => 'required|exists:cities,id',
        ]);

        Location::create([
            'name'                  =>$request->name,
            'description'           =>$request->description ,
            'city_id'               =>$request->city_id ,
        ]);

        return redirect()->route('admin.locations.index')
        ->with('success',__('Location Created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $cities = City::select('id','name')->get();
        return view('locations.edit',compact('cities','location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'description'           => 'nullable|string',
            'city_id'               => 'required|exists:cities,id',
        ]);

        $location->update([
            'name'                  =>$request->name,
            'description'           =>$request->description ,
            'city_id'               =>$request->city_id ,
        ]);

        
        return redirect()->route('admin.locations.index')
        ->with('success',__('Location Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();

        
        return redirect()->route('admin.locations.index')
        ->with('success',__('Location Deleted'));
    }
}
