<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodBeverage;
use App\Models\FoodBeverageCategory;
use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function index()
    {   
        $combodeals = FoodBeverage::where('food_beverage_category_id', 1)->get();
        $foodandbeverages = FoodBeverage::where('food_beverage_category_id', '!=', 1)->get();
        $categories = FoodBeverageCategory::all();
        $featured = FoodBeverage::inRandomOrder()->limit(4)->get();
        return view('foodandbeverage.index', [
            'combodeals' => $combodeals,
            'foodandbeverages' => $foodandbeverages,
            'categories' => $categories,
            'featured' => $featured
        ]);
    }

    public function categories($category)
    {
        return view('foodandbeverage.category', [
            'category' => FoodBeverageCategory::find($category),
            'foodandbeverages' => FoodBeverage::where('food_beverage_category_id', $category)->get()
        ]);
    }

    public function detail($fnb)
    {   
        if (auth()->check()) {
            $match = [
                'user_id' => auth()->user()->id,
                'food_beverage_id' => $fnb
            ];
    
            $addedToCart = Cart::where($match)->exists();

            return view('foodandbeverage.details', [
                'details' => FoodBeverage::where('id', $fnb)->get(),
                'featured' => FoodBeverage::inRandomOrder()->limit(4)->get(),
                'addedToCart' => $addedToCart
            ]);
            
        } else {
            return view('foodandbeverage.details', [
                'details' => FoodBeverage::where('id', $fnb)->get(),
                'featured' => FoodBeverage::inRandomOrder()->limit(4)->get(),
                'addedToCart' => false
            ]);
        }
        

    }
}
