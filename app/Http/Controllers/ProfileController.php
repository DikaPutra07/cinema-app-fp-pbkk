<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\FoodBeverage;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\OrderFoodBeverage;
use App\Models\OrderFoodBeverageDetails;

use function Laravel\Prompts\error;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {   
        $user = auth()->user();
        $manager = $user->isManager;
        $foodBeverages = FoodBeverage::all()->collect();

        if($manager){
            return view('profile.user-dashboard', [
                'user' => $user,
                'manager' => $manager,
                'foodBeverages' => $foodBeverages,
                'reservations' => Reservation::where('user_id', $user->id)->get(),
                'orders' => OrderFoodBeverage::where('user_id', $user->id)->get()
            ]);
        }
        else{
            return view('profile.user-dashboard', [
                'user' => $user,
                'manager' => $manager,
                'reservations' => Reservation::where('user_id', $user->id)->get(),
                'orders' => OrderFoodBeverage::where('user_id', $user->id)->get()
            ]);
        }
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {   
        
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
            ]);

            User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return redirect()->route('profilenizam-index');
    }
    
    public function orderDetails($id){
        $orderdetails = OrderFoodBeverageDetails::where('order_food_beverage_id', $id)->get();
        $foodBeverages = FoodBeverage::all()->collect();
        return view('profile.order-details', [
            'orderdetails' => $orderdetails,
            'foodBeverages' => $foodBeverages,
        ]);
    }
}
