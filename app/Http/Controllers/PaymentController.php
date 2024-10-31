<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Purpose;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $products = Purpose::all();
        return view('pages.studentpayment', compact('products'));
    }

    public function payMisc()
    {
        $products = Purpose::all();
        return view('pages.studentpayment', compact('products'));
    }
    public function create()
    {

    }
    public function pay(Request $request)
    {
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
    
        $isPaid = true;
        $change = 0;
        $balance = 0;
    
        if ($money == $price) {
            $isPaid = true;
            $balance = 0;
            $change = 0;
        } elseif ($money < $price) {
            $isPaid = false;
            $balance = $price - $money;
            $change = 0;
        } elseif ($money > $price) {
            $isPaid = true;
            $change = $money - $price;
            $balance = 0;
        }
        Payment::create([
            'name' => null, // Ensure you have 'name' in your form
            // 'user_id' => null, // Set this appropriately if needed
            'amount' => $money,
            // 'product_id' => $product->id, // Assuming you have a product
            'purpose' => $product->name,
            'price' => $price,
            'isPaid' => $isPaid,
            'balance' => $balance,
            'change' => $change,
        ]);


    
        return response()->json([
            'message' => $isPaid ? 'Payment successful!' : 'Insufficient funds!',
            'isPaid' => $isPaid,
            'balance' => $balance,
            'change' => $change,
        ]);
        // return redirect()->route('dashboard');
    }
}
