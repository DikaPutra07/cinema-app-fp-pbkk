<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodBeverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'food_beverage_category_id',
    ];

    public function foodBeverageCategory()
    {
        return $this->belongsTo(FoodBeverageCategory::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderFoodBeverageDetails()
    {
        return $this->hasMany(OrderFoodBeverageDetails::class);
    }
}
