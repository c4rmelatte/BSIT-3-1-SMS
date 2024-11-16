<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{   
    // Show a specific department
    public function show($id)
    {
        $department = Department::findOrFail($id); // Retrieve the department by ID
        return view('departments.show', compact('department')); // Return the view with the department data
    }

    // Show the create department form
    public function create()
    {
        return view('departments.create');
    }

    // Store a new department
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'image' => 'required|url', // If the image is a URL, otherwise you can adjust to 'image' type
            'description' => 'required|string',
        ]);

        // Check if a department with the same name already exists
        $existingDepartment = Department::where('name', $request->name)->first();
        
        if ($existingDepartment) {
            // If department exists, return an error message
            return redirect()->back()->with('error', 'Department with this name already exists.');
        }

        Department::create($validated); // Store the validated data
        
        return redirect()->route('departmentdash');
    }

    // Show the edit department form
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.update', compact('department'));
    }

    // Update an existing department
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|url',
            'description' => 'required|string',
        ]);

        $department = Department::findOrFail($id);

        // Check if the department name is being changed and if the new name already exists
        if ($department->name !== $request->name) {
            $existingDepartment = Department::where('name', $request->name)->first();

            if ($existingDepartment) {
                // If department with the new name exists, return an error message
                return redirect()->back()->with('error', 'Department with this name already exists.');
            }
        }

        $department->update($validated); // Update with the validated data
        
        return redirect()->route('departmentdash');
    }

    // Delete a department
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        
        return redirect()->route('departmentdash');
    }
}
