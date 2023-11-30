<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodBeverage;
use App\Models\FoodBeverageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FoodBeverageController extends Controller
{
    public function index()
    {   
        $combo = Cache::remember('food_beverages_combo', now()->addHours(6), function () {
            return FoodBeverage::where('food_beverage_category_id', 1)->get();
        });

        $combodeals = $combo;
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
        $foodAndBeverages = Cache::remember('food_beverages_category' . $category, now()->addHours(6), function () use ($category) {
            return FoodBeverage::where('food_beverage_category_id', $category)->get();
        });

        return view('foodandbeverage.category', [
            'category' => FoodBeverageCategory::find($category),
            'foodandbeverages' => $foodAndBeverages
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
