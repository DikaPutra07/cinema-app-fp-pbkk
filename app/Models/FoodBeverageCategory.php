<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodBeverageCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function foodBeverages()
    {
        return $this->hasMany(FoodBeverage::class);
    }
}
