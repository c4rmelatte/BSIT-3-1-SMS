<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;

class CreatePaymentController extends Controller
{
    //
    public function index()
    {
        $products = Purpose::all();
        return view('pages.studentoption', compact('products'));
    }
}
