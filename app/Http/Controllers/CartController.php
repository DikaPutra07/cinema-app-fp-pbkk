<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Payment;

class CartController extends Controller
{
    public function index()
    {   
        $user = auth()->user()->id;
        $items = Cart::where('user_id', $user)->get();
        $payments = Payment::all();

        return view('foodandbeverage.cart', [
            'cartitems' => $items,
            'payments' => $payments
        ]);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'cart-quantity' => 'required|numeric|min:1',
            'cart-fnb-id' => 'required|numeric|exists:food_beverages,id'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['food_beverage_id'] = $request->input('cart-fnb-id');
        $validated['quantity'] = $request->input('cart-quantity');

        Cart::create($validated);

        return redirect()->route('foodandbeverages-detail', $validated['food_beverage_id'])->with('success', 'Item added to cart');
    }

    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart-index');
    }
}
