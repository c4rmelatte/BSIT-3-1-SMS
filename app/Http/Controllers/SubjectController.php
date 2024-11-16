<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function viewSubject(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle form submission to create a new subject
            $request->validate([
                'subjectName' => 'required|string|max:255'
            ]);

            // Example: Storing the new subject in the database
            Subject::create([
                'name' => $request->input('subjectName')
            ]);

            // Redirect after storing with success message
            return redirect()->route('viewsubjectsg1')->with('success', 'Subject created successfully');
        }

        // For GET request, retrieve the list of subjects to pass to the view
        $subjects = Subject::all(); // Ensure you have a Subject model set up to retrieve data

        return view('viewsubjectsg1', compact('subjects'));
    }
}
