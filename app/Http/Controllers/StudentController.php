<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Payment;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $announcements = Announcement::all();
        $payments = Payment::all();
        return view ('pages.studentdashboard',compact('announcements','payments'));
    }
}
