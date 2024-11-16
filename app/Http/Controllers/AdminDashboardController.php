<?php

namespace App\Http\Controllers;

use App\Models\Building; // Ensure this line is present
use App\Models\Department; 
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('id', 'DESC')->get();
        return view('pages.admindash', compact('departments')); // Use compact for cleaner syntax
    }
    public function showDepartmentDash()
    {
        $departments = Department::orderBy('created_at', 'desc')->get(); // Retrieve department data for the department dashboard
        return view('pages.departmentdash', compact('departments')); // Pass the departments to the view
    }


public function showBuildingDash(Request $request)
{
    $buildings = Building::with('department')->get();
    return view('pages.buildingdash', compact('buildings'));
}

}
