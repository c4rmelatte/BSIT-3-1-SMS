<?php

// app/Http/Controllers/EnrollmentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class EnrollmentController extends Controller
{
    public function showEnrollmentForm($level)
    {
        $fields = $this->getFieldsForLevel($level);
        return view('enrollment_form', compact('level', 'fields'));
    }

    private function getFieldsForLevel($level)
    {
        switch ($level) {
            case 'elementary':
                return ['name', 'year', 'subjects', 'room'];
            case 'highschool':
                return ['name', 'year', 'semester', 'subjects', 'room'];
            case 'seniorhigh':
                return ['name', 'year', 'semester', 'subjects', 'room'];
            case 'college':
                return ['name', 'year', 'semester', 'course', 'subjects', 'room'];
            default:
                return ['name'];
        }
    }

    public function store(Request $request, $level)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'sometimes|required',
            'semester' => 'sometimes|required',
            'course' => 'sometimes|required|string',
            'subjects' => 'required|string',
            'room' => 'required|string',
        ]);

        Student::create($validatedData);
        return redirect()->route('view_students')->with('success', 'Student enrolled successfully in ' . ucfirst($level));
    }

    public function viewStudents()
    {
        $students = Student::all();
        return view('view_students', compact('students'));
    }
}
