<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderFoodBeverageDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_bev_id',
        'beverage_id',
        'quantity'
    ];

    public function orderFoodBeverage()
    {
        return $this->belongsTo(OrderFoodBeverage::class);
    }

    public function foodBeverage()
    {
        return $this->belongsTo(FoodBeverage::class);
    }
}
