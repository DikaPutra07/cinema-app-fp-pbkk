<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'food_beverage_id',
        'quantity',
    ];

    public function foodBeverage()
    {
        return $this->belongsTo(FoodBeverage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
