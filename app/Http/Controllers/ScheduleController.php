<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Display all schedules
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    // Show form to create a new schedule
    public function create()
    {
        return view('schedules.create');
    }

    // Store one or more schedules
    public function store(Request $request)
    {
        // Validate each schedule entry
        $request->validate([
            'title.*' => 'required|string|max:255',
            'date.*' => 'required|date',
            'time.*' => 'required|date_format:H:i',
        ]);

        // Loop through each schedule input and create a record
        foreach ($request->title as $index => $title) {
            Schedule::create([
                'title' => $title,
                'date' => $request->date[$index],
                'time' => $request->time[$index],
            ]);
        }

        return redirect('/schedule')->with('success', 'Schedules created successfully.');
    }

    // Show a specific schedule
    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedules.show', compact('schedule'));
    }

    // Show form to edit a schedule
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedules.edit', compact('schedule'));
    }

    // Update a schedule
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update([
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect('/schedule')->with('success', 'Schedule updated successfully.');
    }

    // Delete a schedule
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect('/schedule')->with('success', 'Schedule deleted successfully.');
    }
}