<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderFoodBeverage;
use App\Models\OrderFoodBeverageDetails;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class OrderFoodBeverageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fnb-order-payment' => 'required|numeric|exists:payments,id',
            'fnb-order-total' => 'required|numeric',
            'card_number' => 'required',
            'card_name' => 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['payment_id'] = $request->input('fnb-order-payment');
        $validated['payment_number'] = $request->input('card_number');
        $validated['payment_account'] = $request->input('card_name');
        $validated['total'] = $request->input('fnb-order-total');
        $validated['time'] = now();

        OrderFoodBeverage::create($validated);
        $items = Cart::where('user_id', $validated['user_id'])->get();
        
        foreach ($items as $item) {
            OrderFoodBeverageDetails::create([
                'order_food_beverage_id' => OrderFoodBeverage::where('user_id', $validated['user_id'])->latest()->first()->id,
                'food_beverage_id' => $item->food_beverage_id,
                'quantity' => $item->quantity
            ]);
        }

        Cart::where('user_id', $validated['user_id'])->delete();

        return redirect()->route('foodandbeverages-index')->with('success', 'Order success!');
    }
}
