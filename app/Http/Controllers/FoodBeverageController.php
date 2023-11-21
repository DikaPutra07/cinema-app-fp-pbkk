<?php

namespace App\Http\Controllers;

use App\Models\FoodBeverage;
use App\Models\FoodBeverageCategory;
use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function index()
    {   
        return view('foodandbeverage.index', [
            'foodandbeverages' => FoodBeverage::all(),
            'categories' => FoodBeverageCategory::all()
        ]);
    }

    public function categories($category)
    {
        return view('foodandbeverage.category', [
            'category' => FoodBeverageCategory::find($category),
            'foodandbeverages' => FoodBeverage::where('food_beverage_category_id', $category)->get()
        ]);
    }

    public function detail()
    {
        return view('foodandbeverage.details');
    }

    public function cart()
    {
        return view('foodandbeverage.cart');
    }
}
