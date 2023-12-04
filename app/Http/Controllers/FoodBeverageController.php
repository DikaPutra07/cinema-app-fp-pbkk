<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodBeverage;
use App\Models\FoodBeverageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;

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

    public function update(Request $request, FoodBeverage $fnb)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'description' => 'required|string',
            'food_beverage_category_id' => 'required|exists:food_beverage_categories,id'
        ]);

        $category = FoodBeverageCategory::find($request->food_beverage_category_id);

        if($request->image){
            $filename = 'images/fnb/'.$category->name.'/'.Str::random(15);
            $request->image->storeAs('public', $filename);
            $filename = 'storage/'.$filename;
        }
        // $filename = 'images/fnb/'.$category->name.'/'.Str::random(15);

        // $request->image->storeAs('public', $filename);

        // $filename = 'storage/'.$filename;

        $fnb->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image ? $filename : $fnb->image,
            'description' => $request->description,
            'food_beverage_category_id' => $request->food_beverage_category_id
        ]);

        return redirect()->back();
    }

    public function edit(FoodBeverage $fnb)
    {
        return view('profile.editfnb', [
            'fnb' => FoodBeverage::find($fnb->id),
            'foodBeverageCategories' => FoodBeverageCategory::all()->collect()
        ]);
    }

    public function destroy(FoodBeverage $fnb)
    {
        $fnb->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'required|string',
            'food_beverage_category_id' => 'required|exists:food_beverage_categories,id'
        ]);

        $category = FoodBeverageCategory::find($request->food_beverage_category_id);

        $filename = 'images/fnb/'.$category->name.'/'.Str::random(15);

        $request->image->storeAs('public', $filename);

        $filename = 'storage/'.$filename;

        FoodBeverage::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $filename,
            'description' => $request->description,
            'food_beverage_category_id' => $request->food_beverage_category_id
        ]);

        return redirect()->back();
    }

    public function create()
    {
        return view('profile.createfnb', [
            'foodBeverageCategories' => FoodBeverageCategory::all()->collect()
        ]);

        return redirect()->back();
    }
}
