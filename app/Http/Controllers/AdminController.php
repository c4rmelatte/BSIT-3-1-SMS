<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;
use App\Models\Announcement;
use App\Models\Payment;


class AdminController extends Controller
{
    //
    public function index()
    {   
        $products = Purpose::all();
        $announcements = Announcement::all();
        $payments = Payment::all();
        return view('pages.admindashboard', compact('products','announcements','payments'));
    }
    public function dashboard(){
        $products = Purpose::all();
        $announcements = Announcement::all();
        $payments = Payment::all();
        return view('pages.admindashboard', compact('products','announcements','payments'));
    }


    //PURPOSE CONTROLLER
    public function createPurpose(){
        $products = Purpose::all();
        return view('pages.adminpurpose', compact('products'));
    }
    
    public function storePurpose(Request $request){
        Purpose::create([
            'name'=>$request->get('name'),
            'price'=>$request->get('price')
        ]);
        return redirect()->route('admindashboard');
    }



    //ANNOUNCEMENT CONTROLLER
    public function createAnnouncement(){
        $products = Purpose::all();
        return view('pages.createannouncement', compact('products'));
    }
    
    public function storeAnnouncement(Request $request){
        Announcement::create([
            'title'=>$request->get('title'),
            'content'=>$request->get('content')
        ]);
        return redirect()->route('admindashboard');
    }

    public function edit($id)
{
        $announcement = Announcement::findOrFail($id);
        return view('pages.updateannouncement', compact('announcement')); 
}

    public function update(Request $request, $id)
{
        $announcement = Announcement::findOrFail($id);
    
        $announcement->update([
        'title' => $request->get('title'),
        'content' => $request->get('content')
        ]);

        return redirect()->route('admindashboard')->with('success', 'Announcement updated successfully.');
}


}

