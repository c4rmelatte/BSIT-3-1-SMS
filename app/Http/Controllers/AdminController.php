<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;
use App\Models\Announcement;
use App\Models\Payment;
use App\Models\totalFunds;


class AdminController extends Controller
{
    //
    public function index()
    {   
        $products = Purpose::all();
        $announcements = Announcement::all();
        $payments = Payment::all();
        $funds = totalFunds::first();

        if (!$funds){
        totalFunds::create([
            'funds' => 0
        ]);
    }

        return view('pages.admindashboard', compact('products','announcements','payments','funds'));
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
        return view('pages.createpurpose', compact('products'));
    }
    
    public function storePurpose(Request $request){
        Purpose::create([
            'name'=>$request->get('name'),
            'price'=>$request->get('price')
        ]);
        return redirect()->route('admindashboard');
    }

    
    public function editPurpose($id)
{
        $product = Purpose::findOrFail($id);
        return view('pages.updatepurpose', compact('product')); 
}

    public function updatePurpose(Request $request, $id)
{
        $product = Purpose::findOrFail($id);
    
        $product->update([
        'name' => $request->get('name'),
        'price' => $request->get('price')
        ]);

        return redirect()->route('admindashboard')->with('success', 'Product updated successfully.');
}

public function deletePurpose($id)
{
        $product = Purpose::findOrFail($id);
        $product -> delete();
        return redirect()->route('admindashboard')->with('success', 'Product deleted successfully.');
}



    //ANNOUNCEMENT CONTROLLER
    public function createAnnouncement(){
        $announcements = Announcement::all();
        return view('pages.createannouncement', compact('announcements'));
    }
    
    public function storeAnnouncement(Request $request){
        Announcement::create([
            'title'=>$request->get('title'),
            'content'=>$request->get('content')
        ]);
        return redirect()->route('admindashboard');
    }

    public function editAnnouncement($id)
{
        $announcement = Announcement::findOrFail($id);
        return view('pages.updateannouncement', compact('announcement')); 
}

    public function updateAnnouncement(Request $request, $id)
{
        $announcement = Announcement::findOrFail($id);
    
        $announcement->update([
        'title' => $request->get('title'),
        'content' => $request->get('content')
        ]);

        return redirect()->route('admindashboard')->with('success', 'Announcement updated successfully.');
}

public function deleteAnnouncement($id)
{
        $announcement = Announcement::findOrFail($id);
        $announcement -> delete();
        return redirect()->route('admindashboard')->with('success', 'Announcement deleted successfully.');
}


    //PAYMENT CONTROLLER

    public function editPayment($id)
{
        $payment = Payment::findOrFail($id);
        return view('pages.updatepayment', compact('payment')); 
}

    public function updatePayment(Request $request, $id)
{
        $payment = Payment::findOrFail($id);
        $amount = $request->get('amount');
    
        $payment->update([
        'amount' => $request->get('amount'),
        'purpose' => $request->get('purpose'), 
        'price' => $request->get('price'),
        'isPaid' => $request->get('isPaid'),
        'change' => $request->get('change')
        ]);

        $funds = totalFunds::first();
        $price = $request->get('price');

        
        if ($funds) {
            // Subtract the payment amount from the funds
            $funds->increment(
                'funds',$amount
            );
        }

        // if ($newAmount < $initialAmount) {
        //     $funds->decrement(
        //         'funds',$newAmount
        //     );
        // }

        // if ($newAmount > $initialAmount) {
        //     $funds->increment(
        //         'funds',$newAmount
        //     );
        // }


        return redirect()->route('admindashboard')->with('success', 'Payment updated successfully.');
}

    public function deletePayment($id)
{
        $payment = Payment::findOrFail($id);
        $payment -> delete();
   

        $funds = totalFunds::first();
        $amount=$payment->amount;
        

        if ($funds) {
            // Subtract the payment amount from the funds
            $funds->decrement(
                'funds',$amount
            );
        }

    return redirect()->route('admindashboard')->with('success', 'Payment deleted successfully.');
}

}

