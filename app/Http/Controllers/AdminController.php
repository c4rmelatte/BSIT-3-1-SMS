<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;
use App\Models\Announcement;
use App\Models\Payment;
use App\Models\totalFunds;
use App\Models\DTR;

use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function index()
    {   
        $products = Purpose::all();
        $announcements = Announcement::all();
        $payments = Payment::all();
        $records = DTR::all();
        $funds = totalFunds::first();

        DTR::create([
            'name' => 'John Doe',  // Assuming $user is authenticated or fetched
            'logged_in' => Carbon::now()->toDateTimeString(),  // Current timestamp
            'logged_out' => null,  // No logout yet
            'date' => Carbon::today()->toDateString(),  // Today's date
        ]);

        if (!$funds){
        totalFunds::create([
            'funds' => 0
        ]);
    }

        return view('pages.admindashboard', compact('products','announcements','payments','funds','records'));
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
            'content'=>$request->get('content'),
            'posted'=>1
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
        'content' => $request->get('content'),
        'posted'=> $request->get('posted')
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
    $newAmount = $request->get('amount');
    $oldAmount = $payment->amount;

    $newPrice = $request->get('price');
    $newChange = $newAmount - $newPrice;

    $payment->update([
        'amount' => $newAmount,
        'purpose' => $request->get('purpose'), 
        'price' => $newPrice,
        'isPaid' => $request->get('isPaid'),
        'change' => $newChange  
    ]);

    $funds = totalFunds::first();
    $difference = $newAmount - $oldAmount;

    if ($funds) {
        if ($difference < 0) {
            $funds->decrement('funds', abs($difference));
        } elseif ($difference > 0) {
            $funds->increment('funds', abs($difference));
        }
    }

    return redirect()->route('admindashboard')->with('success', 'Payment updated successfully.');
}

public function deletePayment($id)
{
        $payment = Payment::findOrFail($id);
        $payment -> delete();
        $change = $payment->change;
   

        $funds = totalFunds::first();
        $amount=$payment->amount;
        

        if ($funds) {
            $funds->decrement(
                'funds',$amount - $change
            );
        }

    return redirect()->route('admindashboard')->with('success', 'Payment deleted successfully.');
}

 public function logout(Request $request)
{
    // Get the authenticated user
    $user = auth();

    // Find the latest DTR record for the user where logged_out is null
    $dtr = DTR::where('name', "John Doe")
              ->whereNull('logged_out')
              ->latest('logged_in') // Ensure it picks the most recent record
              ->first();

    // if (!$dtr) {
    //     return response()->json(['message' => 'No active session found to log out from.'], 404);
    // }

    // Update the logged_out timestamp
    $dtr->update([
        'logged_out' => Carbon::now(),
    ]);

    return redirect('/');
}
}

