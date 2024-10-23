<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Main dashboard
    public function index()
    {
        return view('dashboard.index');
    }

    // Announcement page
    public function announcement()
    {
        return view('dashboard.announcement');
    }

    // Building page
    public function building()
    {
        return view('dashboard.building');
    }

    // Departments page
    public function departments()
    {
        return view('dashboard.departments');
    }

    // Courses page
    public function courses()
    {
        return view('dashboard.courses');
    }

    // Curriculum page
    public function curriculum()
    {
        return view('dashboard.curriculum');
    }

    // Subject page
    public function subject()
    {
        return view('dashboard.subject');
    }
}
