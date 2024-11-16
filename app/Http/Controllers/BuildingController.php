<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Department;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    // Method to show the list of buildings
    public function index()
    {
        $buildings = Building::with('department')->get(); // Eager loading the department
        return view('buildingdash', compact('buildings'));
    }

    // Method to show the create building form
    public function create()
    {
        $departments = Department::all();
        return view('buildings.create', compact('departments'));
    }

    // Method to store a new building
    public function store(Request $request)
    {
        // Validate the building name to ensure it's unique within the department
        $request->validate([
            'name' => 'required|string|max:100|unique:buildings,name,NULL,id,department_id,' . $request->department_id, // Ensure unique name within department
            'description' => 'required|string',
            'image' => 'required|url',
            'department_id' => 'required|exists:departments,id',
        ]);

        Building::create($request->all());
        return redirect()->route('buildingdash')->with('success', 'Building created successfully.');
    }

    // Method to show the edit building form
    public function edit($id)
    {
        $building = Building::findOrFail($id);
        $departments = Department::all();
        return view('buildings.edit', compact('building', 'departments'));
    }

    // Method to update the existing building
    public function update(Request $request, $id)
    {
        // Validate the building name to ensure it's unique within the department
        $request->validate([
            'name' => 'required|string|max:255|unique:buildings,name,' . $id . ',id,department_id,' . $request->department_id, // Ensure unique name within department, except for current building
            'description' => 'required|string',
            'image' => 'required|url',
            'department_id' => 'required|exists:departments,id',
        ]);

        $building = Building::findOrFail($id);
        $building->update($request->all());
        return redirect()->route('buildingdash')->with('success', 'Building updated successfully.');
    }

    // Method to delete the building
    public function destroy($id)
    {
        $building = Building::findOrFail($id);
        $building->delete();
        return redirect()->route('buildingdash')->with('success', 'Building deleted successfully.');
    }
}
