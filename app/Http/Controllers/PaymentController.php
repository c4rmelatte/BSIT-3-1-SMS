<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Purpose;
use App\Models\totalFunds;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index1()
    {
        $products = Purpose::all();
        $payments = Payment::all();
        return view('pages.studentpaymentmisc', compact('products'));
    }
    public function index2()
    {
        $products = Purpose::all();
        $payments = Payment::all();
        return view('pages.studentpaymenttuition', compact('products'));
    }

    public function history() {
        $users = User::all();
        $payments = Payment::all()->where('name', "John Doe");
        return view('pages.paymenthistory', compact('payments'));
    }

    public function misc()
    {
        $products = Purpose::all();
        return view('pages.studentpaymentmisc', compact('products'));
    }

    public function tuit()
    {
        $products = Purpose::all();
        return view('pages.studentpaymenttuition', compact('products'));
    }
    public function create()
    {

    }
    public function payMisc(Request $request)
    {
        $isPaid = FALSE;

        $request->validate([
            'amount' => 'required|numeric|min:0', 
            'product_name' => 'required|string'
        ]);
    
        $money = $request->input('amount');
    
        $productName = $request->input('product_name');

        $product = Purpose::where('name',$productName)->first();
    
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    
        $price = $product->price;
    
        $change = 0;
        $funds = totalFunds::first();
        if ($money == $price) {
            $change = 0;
            $isPaid = TRUE;
        } elseif ($money < $price) {
            $change = 0;
            return response()->json(['message' => 'Not enough money'], 404);
        } elseif ($money > $price) {
            $change = $money - $price;
            $isPaid = TRUE;
        }
        Payment::create([
            'name' => "John Doe", // Ensure you have 'name' in your form
            // 'user_id' => null, // Set this appropriately if needed
            'amount' => $money,
            // 'product_id' => $product->id, // Assuming you have a product
            'purpose' => $product->name,
            'price' => $price,
            'change' => $change,
            'type' => 'miscellaneous',
            'isPaid' => $isPaid
        ]);

        $totalAmount = $money - $change;

         $funds->increment(
            'funds',$totalAmount
         );

        return redirect()->route('dashboard1');
    }

    public function payTuit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0', 
            'semester' => 'required|string'
        ]);

        $money = $request->input('amount');
        $semester = $request->input('semester');
        $price = 15000;
        $type = 'tuition';
        $isPaid = FALSE;
        $change = 0;
        $existingPayment = Payment::where('purpose', $semester)
                            ->where('type', $type)
                            ->where('isPaid', true)
                            ->first();

        $funds = totalFunds::first();
        if ($money == $price) {
            $change = $money - $price;
            $isPaid = TRUE;
        } elseif ($money < $price) {
            $change =  $money - $price;
            return response()->json(['message' => 'Not enough money'], 404);
        } elseif ($money > $price) {
            $change =  $money - $price;
            $isPaid = TRUE;
        }

        if ($existingPayment) {
            return response()->json(['message' => 'Already paid'], 404);
        } else {
        Payment::create([
            
            'name' => "John Doe", // Ensure you have 'name' in your form
            // 'user_id' => null, // Set this appropriately if needed
            'amount' => $money,
            // 'product_id' => $product->id, // Assuming you have a product
            'purpose' => $semester,
            'price' => $price,
            'change' => $change,
            'type' => $type,
            'isPaid' => $isPaid
        ]);
    };

        $totalAmount = $money - $change;

         $funds->increment(
            'funds',$totalAmount
         );

         return redirect()->route('dashboard2');
    }

    public function showReceipt($id){

          
          $payment = Payment::find($id);

          if (!$payment) {
              return redirect()->route('history')->with('error', 'Payment not found');
          }
  
          return view('pages.receipt', compact('payment'));
    }
    
}